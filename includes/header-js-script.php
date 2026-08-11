<?php require $_SERVER['DOCUMENT_ROOT'] . "/includes/datalayer-gtm.php"; ?>
<script>
    // New way of handling UTM
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        const results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }

    function setUtmInSession(postdata) {
        fetch('/includes/user-utm.php?task=setUTMRecords', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams(postdata)
        }).then(response => {
            if (response.ok) {
                return response.text();
            }
        }).then(data => {
            // console.log('PHP session updated:', data);
        }).catch(error => {
            console.error('Error updating PHP session:', error);
        });
    }

    function getCountry() {
        let countryValueArray = JSON.parse('<?php echo json_encode($country_value_array ?? []); ?>') || {};
        let utmData = JSON.parse(localStorage.getItem('user-utm')) || {};
        return new Promise((resolve, reject) => {
            if (utmData && utmData.ip_country_name) {
                resolve(utmData);
            } else {
                fetch('https://api.country.is/')
                    .then(response => response.json())
                    .then(data => {
                        // Check if the response contains the expected country data
                        if (data.country && countryValueArray[data.country]) {
                            let ip_country_name = countryValueArray[data.country];
                            let country = ip_country_name.substring(4);
                            utmData = {
                                ...utmData, // Retain existing userId
                                country,
                                ip_country_name,
                            };
                            // console.log('Country from country.is API:', utmData);
                            // Store UTM data in local storage
                            localStorage.setItem('user-utm', JSON.stringify(utmData));
                            resolve(utmData);
                        } else {
                            throw new Error('Invalid response from country.is API');
                        }
                    })
                    .catch(error => {
                        console.error('Error with country.is API or invalid response:', error.message);
                        // Fallback API endpoint
                        return fetch('https://ipapi.co/json/')
                            .then(fallbackResponse => fallbackResponse.json())
                            .then(fallbackData => {
                                // Check if the fallback response contains the expected country data
                                if (fallbackData.country_code && countryValueArray[fallbackData.country_code]) {
                                    let ip_country_name = countryValueArray[fallbackData.country_code];
                                    let country = ip_country_name.substring(4);
                                    utmData = {
                                        ...utmData, // Retain existing userId
                                        country,
                                        ip_country_name,
                                    };
                                    // console.log('Country from freeipapi.com API:', utmData);
                                    // Store UTM data in local storage
                                    localStorage.setItem('user-utm', JSON.stringify(utmData));
                                    resolve(utmData);
                                } else {
                                    console.error('Invalid response from freeipapi.com API');
                                    return null; // or you can handle it differently
                                }
                            })
                            .catch(fallbackError => {
                                console.error('Error with freeipapi.com API:', fallbackError.message);
                                return null; // or you can handle it differently
                            });
                    });
            }
        });
    }

    function generateUserId() {
        const campaign = 'CAI';
        const dateObj = new Date();
        const month = String(dateObj.getMonth() + 1).padStart(2, '0');
        const day = String(dateObj.getDate()).padStart(2, '0');
        const year = dateObj.getFullYear();
        const date = month + day + year;
        const randomNumber = Math.floor(Math.random() * 90000) + 10000;
        return campaign + date + randomNumber;
    }

    function getUtmData() {
        let utmData = JSON.parse(localStorage.getItem('user-utm')) || {};
        if (!utmData.userId) {
            utmData.userId = generateUserId();
        }
        if (!utmData.startedUrl) {
            utmData.startedUrl = location.href;
        }
        const updateUtmData = (source, medium, campaign, adgroup, term, content, gclid) => {
            utmData = {
                ...utmData, // Retain existing userId
                utm_source: source,
                utm_medium: medium,
                utm_campaign: campaign,
                utm_adgroup: adgroup,
                utm_term: term,
                utm_content: content,
                gclid: gclid,
            };
            localStorage.setItem('user-utm', JSON.stringify(utmData));
            setUtmInSession(utmData);
        };
        const utmSource = getUrlParameter("utm_source");
        const gclid = getUrlParameter("gclid");
        if (utmSource || gclid) {
            // UTM params present in URL
            let utm_source = utmSource || "-";
            let utm_medium = getUrlParameter("utm_medium") || "none";
            let utm_campaign = getUrlParameter("utm_campaign") || "-";
            let utm_adgroup = getUrlParameter("utm_adgroup") || "-";
            let utm_term = getUrlParameter("utm_term") || "-";
            let utm_content = getUrlParameter("utm_content") || "-";
            updateUtmData(utm_source, utm_medium, utm_campaign, utm_adgroup, utm_term, utm_content, gclid);
        } else if (Object.keys(utmData).length === 2) { // Only userId and startedUrl exist
            const searchEngines = ["google", "bing", "yahoo", "baidu", "duckduckgo"];
            let utm_source = "direct";
            let utm_medium = "none";
            let utm_campaign = "-";
            let utm_adgroup = "-";
            let utm_term = "-";
            let utm_content = "-";
            let gclid = "-";
            if (document.referrer) {
                const referrer = new URL(document.referrer);
                let host = referrer.hostname
                    .replace("www.", "")
                    .replace(".com", "")
                    .replace(".in", "")
                    .replace(".net", "")
                    .replace(".org", "")
                    .replace("in.", "")
                    .replace("search.", "");
                const serverName = window.location.hostname;
                if (!serverName.includes(host)) {
                    utm_source = host || "direct";
                    utm_medium = searchEngines.includes(host) ? "organic" : "referral";
                }
            }
            // else: no referrer and no UTM params -> keep the "direct"/"none" defaults
            updateUtmData(utm_source, utm_medium, utm_campaign, utm_adgroup, utm_term, utm_content, gclid);
        } else if (!utmData.utm_source) {
            // No UTM and no referrer, and attribution was never determined before
            utmData.utm_source = "direct";
            utmData.utm_medium = "none";
            localStorage.setItem('user-utm', JSON.stringify(utmData));
            setUtmInSession(utmData);
        }
        // else: attribution already determined on a previous page view, keep it as-is
        return utmData;
    }
    // Example usage
    const userUtmData = getUtmData();
    // Data Layer Stuff
    let pageCategory = '<?php echo $group_name; ?>';
    let pageType = '<?php echo $page_type; ?>';
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        event: "set_user_id",
        user_id: userUtmData?.userId
    });
    dataLayer.push({
        'pageCategory': '<?php echo $group_name; ?>',
        'pageType': '<?php echo $page_type; ?>',
        'orgName': 'Curaide',
        'pageURL': location.href,
        'user_id': userUtmData?.userId
    });
    // End Data Layer Stuff
    //console.log('UTM Data:', userUtmData);
    const countryCodePromise = getCountry();
    // End of UTM
</script>
<?php if ($_SERVER["HTTP_HOST"] == "www.curaide.ai" ||  $_SERVER["HTTP_HOST"] == "curaide.ai") { ?>
    <script>
        setTimeout(function() {
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-56M7G4BQ')
        }, 5000); // Delay by 1.5 seconds
    </script>
<?php } ?>