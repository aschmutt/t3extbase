lib.rootline = COA
lib.rootline {

	10 = TEXT
	10.value = <ul class="breadcrumb">

    ## link to homepage
    20 = TEXT
    20 {
		data = LEVELFIELD:0,nav_title // LEVELFIELD:0,title
        typolink.parameter = {$rootUid}
        wrap = <li>|</li>
    }

	# Breadcrumbs
	30 = HMENU
	30 {
		includeNotInMenu = 1
		special = rootline
		special.range = 1|-1

		1 = TMENU
		1 {
			NO = 1
			NO.doNotLinkIt = |*| 0 |*| 1
			NO.allWrap = <li>|</li>
			NO.stdWrap.htmlSpecialChars = 1

		}
	}

	50 = TEXT
	50.value = </ul>

}

## no rootline on homepage
[globalVar = TSFE:id={$rootUid}]
lib.rootline >
[global]

# add news title to breadcrumbs
[globalVar = GP:tx_news_pi1|news > 0]

lib.rootline.30.includeNotInMenu = 0
lib.rootline.30.1.NO.doNotLinkIt = 0

lib.rootline.40 = RECORDS
lib.rootline.40 {
  dontCheckPid = 1
  tables = tx_news_domain_model_news
  source.data = GP:tx_news_pi1|news
  source.intval = 1
  conf.tx_news_domain_model_news = TEXT
  conf.tx_news_domain_model_news.field = title
  conf.tx_news_domain_model_news.htmlSpecialChars = 1
  wrap = <li>|</li>
}
[end]