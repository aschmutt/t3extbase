## configuration for default language (id=0) in template config.ts

## English configuration
[globalVar = GP:L = {$englishId}]
config {
	 sys_language_uid = {$englishId}
	 language = en
	 locale_all = en_GB.UTF-8
	 htmlTag_langKey = en
}
[global]

## configuration for further languages
/*
[globalVar = GP:L = {$extraId}]
config {
	 sys_language_uid = {$extraId}
	 language =
	 locale_all =
	 htmlTag_langKey =
}
[global]
*/


## language menu with flags
lib.flagmenu = HMENU
lib.flagmenu {
	# Ein Sprach-Menue wird erzeugt
	special = language
	# Reihenfolge und Auswahl der Sprachen im Menue
	special.value = {$englishId},{$deutschId}
	#special.value = {$extraId},{$englishId},{$deutschId}

	special.normalWhenNoLanguage = 0
	wrap = <ul class="flagmenu">|</ul>
	1 = TMENU
	1 {
		noBlur = 1
		# Standard Sprachen
		NO = 1
		NO {
			linkWrap = <li>|</li>

			stdWrap.override = {$nameLang1} || {$nameLang0}
			#stdWrap.override = {$nameLang2} || {$nameLang1} || {$nameLang0}

			doNotLinkIt = 1
			stdWrap.typolink.parameter.data = page:uid
			stdWrap.typolink.additionalParams = &L={$englishId} || &L={$deutschId}
			#stdWrap.typolink.additionalParams = &L={$extraId} || &L={$englishId} || &L={$deutschId}
			stdWrap.typolink.ATagParams.dataWrap = class="flags flags{$englishId}"| || class="flags flags{$deutschId}"|
			#stdWrap.typolink.ATagParams.dataWrap = class="flags flags{$extraId}"| || class="flags flags{$englishId}"| || class="flags flags{$deutschId}"|
			stdWrap.typolink.addQueryString = 1
			stdWrap.typolink.addQueryString.exclude = L,id,cHash,no_cache
			stdWrap.typolink.addQueryString.method = GET
			stdWrap.typolink.useCacheHash = 1
			stdWrap.typolink.no_cache = 0
		}

		# Aktive Sprache
		ACT < .NO
		ACT.stdWrap.typolink >
		ACT.linkWrap = <li><span class="flags flags{$englishId}">|</span></li> || <li><span class="flags flags{$deutschId}">|</span></li>
		#ACT.linkWrap = <li><span class="flags flags{$extraId}">|</span></li> || <li><span class="flags flags{$englishId}">|</span></li> || <li><span class="flags flags{$deutschId}">|</span></li>
		# NO + Übersetzung nicht vorhanden
		USERDEF1 < .NO
		USERDEF1.stdWrap.typolink >
		USERDEF1.doNotShowLink = 1
		# ACT + Übersetzung nicht vorhanden
		USERDEF2 < .ACT
		USERDEF2.stdWrap.typolink >
		USERDEF2.doNotShowLink = 1
	}
}

## language menu without flags, only text links
## to deactivate, comment in with /* and */
lib.flagmenu {
	wrap = <ul class="flagmenu noflags">|</ul>
	1 {
		NO.stdWrap.typolink.ATagParams.dataWrap >
		ACT.linkWrap = <li>|</li>
		ACT.stdWrap.typolink.ATagParams.dataWrap >
	}
}