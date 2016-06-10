plugin.tx_news.settings.startingpoint = {$newsStoragePid}

plugin.tx_news.view {
	layoutRootPaths {
		20 = {$resourceDir}/Extensions/News/Layouts/
	}
	partialRootPaths {
		20 = {$resourceDir}/Extensions/News/Partials/
	}
	templateRootPaths {
		20 = {$resourceDir}/Extensions/News/Templates/
	}
}

## Behaviour of news, if no news-id is given in detail URL
## In this case, redirect to the page with the list view
plugin.tx_news.settings.detail.errorHandling = redirectToPage,{$newsListPid}

## max items in listview for pagination
plugin.tx_news.settings.list.paginate.itemsPerPage = 10

## remove default css
plugin.tx_news._CSS_DEFAULT_STYLE >

plugin.tx_news.settings {


	## settings for list view
	list {
	    ## dimensions for images in listview
		#media.image.width = 100c
		#media.image.maxHeight = 67

		## hide pagination above list view
		paginate.insertAbove = 0
	}

	## settings for single view
	detail {
	    ## dimensions for images in detail view
		#media.image.maxWidth = 870c
		#media.image.maxHeight = 315c

		## enables/disables lightbox rendering in detail view
		## add here the string that shall appear in the rel attribut
		## Example: media.image.lightbox = lightbox
		## In addition, you have to implement a javascript for the lightbox effect!
		## This is not part of the musterprojekt!
		#media.image.lightbox = 0
		media.image {
			# Get lightbox settings from fluid_styled_content
			lightbox {
				enabled = {$styles.content.textmedia.linkWrap.lightboxEnabled}
				class = {$styles.content.textmedia.linkWrap.lightboxCssClass}
				width = {$styles.content.textmedia.linkWrap.width}
				#height = {$styles.content.textmedia.linkWrap.height}
				rel = {$styles.content.textmedia.linkWrap.lightboxRelAttribute}
			}
		}
	}

	## max characters of teaser
	cropMaxCharacters = 200

	## if no preview image is found, display no dummy image
	displayDummyIfNoMedia = 0

	## ID of page with list view
	listPid = {$newsListPid}

	## ID of page with detail view
	defaultDetailPid = {$newsDetailPid}
}

## remove the "erstellt von" in news detail view
## necessary for each used language
plugin.tx_news._LOCAL_LANG {
	default {
		author = %s
	}
	de {
		author = %s
	}
	en {
		author = %s
	}
	fr {
		author = %s
	}
}

## Settings for social plugins

## Set this to 0 to deactivate the social buttons in news detail view
plugin.tx_news.settings.detail.showSocialShareButtons = 1

## Default Language German
plugin.tx_news.settings.facebookLocale = de_DE
plugin.tx_news.settings.googlePlusLocale = de
plugin.tx_news.settings.disqusLocale = de


## English
[globalVar = GP:L = {$englishId}]
plugin.tx_news.settings.facebookLocale = en_EN
plugin.tx_news.settings.googlePlusLocale = en
plugin.tx_news.settings.disqusLocale = en
[global]

## Settings for further languages
#[globalVar = GP:L = {$extraId}]
#plugin.tx_news.settings.facebookLocale = fr_FR
#plugin.tx_news.settings.googlePlusLocale = fr
#plugin.tx_news.settings.disqusLocale = fr
#[global]