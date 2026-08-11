<script>
	/* function getServiceNameFromURL() {
		const url = window.location.href.toLowerCase();
		const serviceMap = [
			{ name: 'Data Management', patterns: ['data-services.php', 'data-entry', 'data-services'] },
			{ name: 'Call Center', patterns: ['call-center-services.php', 'call-center'] },
			{ name: 'IT', patterns: ['it-services.php', 'it-services'] },
			{ name: 'Virtual Assistant Service', patterns: ['virtual-assistant-services.php', 'virtual-assistant'] },
			{ name: 'Healthcare', patterns: ['healthcare-services.php', 'healthcare', 'hospitality-industry'] }
		];
		const matchedService = serviceMap.find(service =>
			service.patterns.some(pattern => url.includes(pattern))
		);

		return matchedService ? matchedService.name : 'Other Services';
	} */

	function copyEmailAndAlert() {
		let utmData = JSON.parse(localStorage.getItem('user-utm')) || {};
		var ga = document.cookie.match(/(^|;) ?_ga=GA1\.1\.([^;]+)(;|$)/);
		let client_id = ga ? ga[2] : '-';
		// const serviceName = getServiceNameFromURL();
		const serviceName = "FW AI HC";

		const data = {
			serviceName,
			email: "",
			currentpageUrl: window.location.href,
			Sitename: window.location.hostname,
			form_name: "Info Email Form",
			userId: utmData.userId,
			utm_source: utmData.utm_source,
			utm_campaign: utmData.utm_campaign,
			utm_medium: utmData.utm_medium,
			utm_term: utmData.utm_term,
			utm_adgroup: utmData.utm_adgroup,
			gclid: utmData.gclid,
			client_id: client_id,
			ip_country_name: utmData.ip_country_name,
			user_agent: navigator.userAgent
		};

		fetch("/includes/infoemail-api.php", {
			method: 'POST',
			headers: { 'Content-Type': 'application/json' },
			body: JSON.stringify(data)
		})
		.then(response => response.text())
		.then(text => {
			try {
				const json = JSON.parse(text);
				const actualEmail = json.temp_email || '';
				navigator.clipboard.writeText(actualEmail)
					.then(() => alert("Email copied to clipboard!"))
					.catch(err => console.error("Clipboard write failed:", err));

				const country_code = (data.ip_country_name.match(/^\d+/) || [])[0] || "";
				data.temp_email = actualEmail;
				data.country_code = country_code;
			} catch (e) {
				console.error("Invalid JSON response:", text);
			}
		})
		.catch(error => console.error("Fetch error:", error));
	}

	document.addEventListener("DOMContentLoaded", function() {
		const elements = document.querySelectorAll('.click2copy');
		elements.forEach(function(element) {
			element.addEventListener('click', function(event) {
				event.preventDefault();
				copyEmailAndAlert();
			});
		});
	});
</script>
