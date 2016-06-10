lib.menu_service = HMENU
lib.menu_service {
	special = directory
	special.value = {$servicemenuUid}
	stdWrap.wrap = <ul class="nav navbar-nav navbar-right"> | </ul>
	1 = TMENU
	1 {
		NO.wrapItemAndSub =  <li> | </li>
		NO.stdWrap.htmlSpecialChars = 1
		CUR < .NO
		CUR = 1
		CUR.wrapItemAndSub = <li class="active"> | </li>
	}
}