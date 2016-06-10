## Page TSConfig

## assign new pages to group "all BE users", set access rights
TCEMAIN.permissions.groupid = 1
TCEMAIN.permissions.group = show, editcontent, edit, new, delete

## page layout disabled
TCEFORM.pages.layout.disabled = 1

## Ueberschriften
TCEFORM.tt_content.header_layout{
     altLabels {
          0 = h1 - Seitenueberschrift
          1 =
          2 = h2 - Themenueberschrift
          3 = h3 - Ueberschrift 3.Ordnung
          4 = h4 - Ueberschrift 4.Ordnung
          5 = h5 - Ueberschrift 5.Ordnung
       }
     removeItems = 1
}

## Layout-Feld erweitern
TCEFORM.tt_content.layout {
	## ggf. Eintraege entfernen
	removeItems = 1,2,3
	addItems.100 = Hellgraue Box
	addItems.110 = Dunkelgraue Box
}

## Layout-Feld fuer das CE "Tabellen" anpassen
TCEFORM.tt_content.layout.types.table {
    removeItems = 1,2,3,100,110
    addItems.200 = Tabellenlayout 1
    addItems.210 = Tabellenlayout 2
	addItems.220 = Tabellenlayout 3
}

##remove not needed image positions for responsive images
TCEFORM.tt_content.imageorient.types.textmedia.keepItems = 2,10,17,18,25,26
TCEFORM.tt_content.imageorient.disableNoMatchingValueElement = 1

##default value for new content element
mod.wizards.newContentElement.wizardItems.common.elements {
	textmedia.tt_content_defValues {
		imageorient = 2
		imagecols = 1
	}
}

## Content Elements: remove width and height fields for responsive images
TCEFORM.tt_content {
    imagewidth.disabled = 1
    imageheight.disabled = 1
}

## max. 4 cols for images in content elements
TCEFORM.tt_content.imagecols.removeItems = 5,6,7,8

## add pastetoggle button to RTE toolbar
RTE.default.showButtons := addToList(pastetoggle)
RTE.default.buttons.pastetoggle.setActiveOnRteOpen = 1

## add an alternative layout for latest news
tx_news.templateLayouts {
  1 = Neueste Meldungen
}

## prefill news author name and e-mail with data of current backend user
## since news 4.2.0
tx_news.predefine.author = 1