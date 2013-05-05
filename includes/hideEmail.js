function EmailUnobsfuscate() {
	
	// find all links in HTML
	var link = document.getElementsByTagName && document.getElementsByTagName("a");
	var hideEmail, e;
	
	// examine all links
	for (e = 0; link && e < link.length; e++) {
	
		// does the link have use a class named "hideEmail"
		if ((" "+link[e].className+" ").indexOf(" hideEmail ") >= 0) {
		
			// get the obfuscated email address
			hideEmail = link[e].firstChild.nodeValue.toLowerCase() || "";
			
			// transform into real email address
			hideEmail = hideEmail.replace(/dot/ig, ".");
			hideEmail = hideEmail.replace(/\(at\)/ig, "@");
			hideEmail = hideEmail.replace(/\s/g, "");
			
			// is email valid?
			if (/^[^@]+@[a-z0-9]+([_\.\-]{0,1}[a-z0-9]+)*([\.]{1}[a-z0-9]+)+$/.test(hideEmail)) {
			
				// change into a real mailto link
				link[e].href = "mailto:" + hideEmail;
				link[e].firstChild.nodeValue = hideEmail;
		
			}
		}
	}
}

window.onload = EmailUnobsfuscate;