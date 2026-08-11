<style>
    .ela-fab-call{display:none !important;}
</style>
<script>
    // Create cookie
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    // Delete cookie
    function deleteCookie(cname) {
        const d = new Date();
        d.setTime(d.getTime() + (24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=;" + expires + ";path=/";
    }
    // Read cookie
    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    function createFormHiddenField(name, value) {
        let input = document.createElement("input");
        input.type = "hidden";
        input.name = name;
        input.value = value;
        return input;
    }
    document.addEventListener("DOMContentLoaded", () => {
        const contactforms = document.querySelectorAll(".main-form, .small-form"); // replace this with your form selector
        if (contactforms.length > 0) {
            countryCodePromise.then(function(utmDataseg) {
                Object.entries(utmDataseg).forEach(([field, value]) => {
                    if (value) {
                        contactforms.forEach(form => {
                            let existing = form.querySelector('input[name="' + field + '"]');
                            if (existing) {
                                existing.value = value;
                            } else {
                                form.appendChild(createFormHiddenField(field, value));
                            }
                        });
                    }
                });
            }).catch(function(error) {
                console.error('Error in promise:', error);
            });
        }
    })
    // DOMContentLoaded  end
</script>
<script>
    window.dataLayer = window.dataLayer || [];
    function sendClickedChatToDataLayer() {
        window.dataLayer.push({
            event: 'chat_icon_clicked'
        });
    }
    document.addEventListener('DOMContentLoaded', () => {
        const chatIframe = document.querySelector('#telena-chat-widget');
        function getChatButton() {
            if (!chatIframe || !chatIframe.contentWindow) return null;
            try {
                const iframeDoc = chatIframe.contentWindow.document;
                return iframeDoc.querySelector('.telena-chat-blantershow-chat');
            } catch (err) {
                console.error('Error accessing iframe content:', err);
                return null;
            }
        }
        window.openChat = function() {
            const chatButton = getChatButton();
            if (chatButton) {
                chatButton.click();
            }
        };
        // Step 1: Wait for iframe to load
        chatIframe?.addEventListener('load', () => {
            const iframeDoc = chatIframe.contentWindow.document;
            // Step 2: Use MutationObserver to wait for chat button
            const observer = new MutationObserver(() => {
                const chatButton = getChatButton();
                if (chatButton) {
                    chatButton.addEventListener('click', () => {
                        sendClickedChatToDataLayer();
                    });
                    observer.disconnect(); // ✅ Done — stop observing
                }
            });
            observer.observe(iframeDoc.body, {
                childList: true,
                subtree: true,
            });
        });
    });
</script>

<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') { ?>
<script>
        // Optional: remove this function if you don't need dynamic variables
        function getElevenLabsDynamicVars(mode) {
            var utmData = {};
            try {
                utmData = JSON.parse(localStorage.getItem('user-utm')) || {};
            } catch (e) {
                console.warn('Invalid utm data in localStorage');
            }
 
            var ga = document.cookie.match(/(^|;) ?_ga=GA1\.1\.([^;]+)(;|$)/);
 
            return Object.assign({}, utmData, {
                website: window.location.hostname.replace(/^(?!www\.)/, 'www.'),
                conversation_started_page: window.location.href,
                service_name: 'AI@FW',
                contact_mode: mode || '',
                session_source: 'website',
                chat_initiated_at: new Date().toISOString(),
                user_ip: window.USER_IP || '',
                client_id: ga ? ga[2] : '-',
                startedUrl: utmData.startedUrl || window.location.href,
            });
        }
 
        window.ElevenLabsAgentConfig = {
            agentId: 'agent_6701kykmpfmve6n86ehfgpx5dfrf',
            dynamicVariables: getElevenLabsDynamicVars(),
            onCallStart: function() {
                this.dynamicVariables = getElevenLabsDynamicVars('Voice');
            },
            onChatStart: function() {
                this.dynamicVariables = getElevenLabsDynamicVars('Chat');
            },
            onConnect: function(id) {
                console.log('[ElevenLabs] Connected:', id);
            },
            onDisconnect: function() {
                console.log('[ElevenLabs] Disconnected');
            },
            onMessage: function(msg) {
                console.log('[ElevenLabs] Message:', msg);
            },
        };
    </script>
<script src="https://clicktalk-elevenlabs-918868566464.us-central1.run.app/static/elevenlabs-agent.js" defer></script>
<?php } ?>