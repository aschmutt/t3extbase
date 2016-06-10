####### body tags according to backendlayouts #######
page = PAGE
page.bodyTagCObject = CASE
page.bodyTagCObject {
	key.data = pagelayout

    default = TEXT
    default.value = layout1

    pagets__1 < .default

    pagets__2 = TEXT
    pagets__2.value = layout2

    stdWrap.wrap = <body class ="|">
}

####### favicons #######
page.shortcutIcon = {$resourceDir}/Icons/favicon.ico
page.headerData.10 = TEXT
page.headerData.10.value (
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{$resourceDir}/Icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{$resourceDir}/Icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{$resourceDir}/Icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{$resourceDir}/Icons/apple-touch-icon-precomposed.png">
)


####### CSS #######
## Layout CSS laden
page.includeCSS {
	bootstrap = {$resourceDir}/Css/bootstrap.css
	bootstrap.media = all

	search = {$resourceDir}/Extensions/indexed_search/Css/indexed_search.css
	search.media = all

	style = {$resourceDir}/Css/musterprojekt_style.css
	style.media = all

}

####### javascript #######
page.includeJSLibs {
	jquery = //code.jquery.com/jquery-2.2.2.min.js
	jquery.external = 1
	jquery.forceOnTop = 1
	jquery.allWrap = <!--[if lte IE 8]><script src="//code.jquery.com/jquery-1.12.2.min.js"></script><![endif]--><!--[if gt IE 8]><!-->|<!--<![endif]-->

	html5shiv = {$resourceDir}/Javascript/html5shiv.js
	html5shiv.excludeFromConcatenation = 1
	html5shiv.allWrap = <!--[if lt IE 9]> | <![endif]-->

	respond = {$resourceDir}/Javascript/respond.min.js
	respond.excludeFromConcatenation = 1
	respond.allWrap = <!--[if lt IE 9]> | <![endif]-->
}

page.includeJSFooter {
	bootstrap = {$resourceDir}/Javascript/bootstrap.min.js
	bootstrap.excludeFromConcatenation = 1
}
