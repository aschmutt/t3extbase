lib.header= IMAGE
lib.header {
	file = {$logoPathFile}
	altText = {$sitename}
	params = class="logo"
## Link fuer das Logo
## Zahl (Seiten-ID), URL (www.zielseite.de) oder Email-Adresse
	stdWrap.typolink {
		parameter = {$rootUid}
		title = {$sitename}
	}
}