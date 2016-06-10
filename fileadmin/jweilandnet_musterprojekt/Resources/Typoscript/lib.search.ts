lib.search = COA
lib.search {
  10 = TEXT
  10 {
    typolink {
          parameter = {$searchresultUid}
          returnLast = url
      }
    wrap = <form action="|" method="post" ><div class="input-group">
  }
  20 = COA
  20.10 = TEXT
  20.10 = TEXT
      20.10.data = GP : tx_indexedsearch |sword
      20.10.htmlSpecialChars = 1
  20.10.wrap = <input name="tx_indexedsearch[sword]" value="|" class="form-control" type="text" />
  20.20 = COA
  20.20.10 = TEXT
  20.20.10.value = <span class="input-group-btn"><input type="submit" class="btn btn-default" value="suchen"></span>
  20.20.20 = TEXT
  20.20.20.value = <input type="hidden" name="tx_indexedsearch_pi2[action]" value="search" />
  20.20.30 = TEXT
  20.20.30.value = <input type="hidden" name="tx_indexedsearch_pi2[controller]" value="Search" />

  wrap = |</div></form>
}

################################################

# Configuration for indexedsearch plugin
plugin.tx_indexedsearch {

  templateFile = {$resourceDir}/Extensions/indexed_search/indexed_search.html

  forwardSearchWordsInResultLink = 0
        show {
          rules = 0
          advancedSearchLink = 0
        }
  search {
    rootPidList = {$rootUid}
    exactCount = 0
    defaultFreeIndexUidList >
  }

  _CSS_DEFAULT_STYLE >
  _DEFAULT_PI_VARS {
    results = 10
  }
}

## search results only in the actual language
## german
plugin.tx_indexedsearch._DEFAULT_PI_VARS.lang = {$deutschId}

## English
[globalVar = GP:L = {$englishId}]
	plugin.tx_indexedsearch._DEFAULT_PI_VARS.lang = {$englishId}
	lib.search.20.20.10.value = <span class="input-group-btn"><input type="submit" class="btn btn-default" value="search"></span>
[global]

## further languages:
## add the following codeblock for each language
## define the variables for the id's in the file fileadmin/jweilandnet_musterprojekt_62/Resources/Typoscript/lib.multilanguage.txt

#[globalVar = GP:L = {$extraId}]
#plugin.tx_indexedsearch._DEFAULT_PI_VARS.lang = {$extraId}
#lib.search.20.20.10.value = <span class="input-group-btn"><input type="submit" class="btn btn-default" value="suchen"></span>
#[global]