lib.menu_horizontal = HMENU
lib.menu_horizontal {
  wrap = <ul class="nav navbar-nav">|</ul>

  1 = TMENU
  1 {
		expAll = 1
		NO = 1
		NO.wrapItemAndSub = <li>|</li>
		NO.stdWrap.htmlSpecialChars = 1

		IFSUB < .NO
		IFSUB {
			wrapItemAndSub = <li class="dropdown">|</li>
			ATagParams = class="dropdown-toggle" data-toggle="dropdown"
			linkWrap = |<b class="caret"></b>
			ATagBeforeWrap = 1
		}
		ACT < .NO
		ACT = 1
		ACT {
			ATagParams = class="current"
			wrapItemAndSub = <li class="active">|</li>
		}
		ACTIFSUB < .IFSUB

		CUR < .ACT
		CUR = 1
	}

  2 < .1
  2 {
    wrap = <ul class="dropdown-menu">|</ul>
    NO.wrapItemAndSub = <li>|</li>

	  IFSUB >
  }

}