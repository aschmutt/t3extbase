config {

	absRefPrefix = /
	tx_realurl_enable = 1
	prefixLocalAnchors = all

## HTML5 Settings ##
## Set doctype
	doctype = html5
	xmlprologue = none
  
## Removes comments around content elements
	disablePrefixComment = 1

## values for default language: German
	sys_language_uid = 0
	language = de
	locale_all = de_DE.utf8
	htmlTag_langKey = de

	uniqueLinkVars = 1
	linkVars = L(1-4)
 
## Activate Admin-Panel
	admPanel = 0

## Extra Debug-Info as comment in HTML code.
## Should be deactivated after going online!
    #debug = 0
    
## Spam protection, encode email-address, exchanging @ to '(at)':
	spamProtectEmailAddresses = 1
	spamProtectEmailAddresses_atSubst = (at)

## Save klicks on external links in table sys_stat 
	jumpurl = 1

## Enable indexedsearch also for extern files (pdf, doc, etc.)
	index_enable = 1
	index_externals = 1
	index_metatags = 0

## Save frontend user access
	tx_loginusertrack_enable = 1


##Css and JS compression for live
 #compressJs = 1
 #concatenateJs = 1

 #compressCss = 1
 #concatenateCss = 1
}