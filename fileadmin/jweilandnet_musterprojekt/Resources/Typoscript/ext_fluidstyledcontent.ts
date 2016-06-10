lib.fluidContent {
	templateRootPaths.100 = {$resourceDir}/Extensions/fluid_styled_content/Templates/Content/
	layoutRootPaths.100 = {$resourceDir}/Extensions/fluid_styled_content/Layouts
}

## no image width must be inserted in Editor view
## max width for columns defined
tt_content.textmedia.dataProcessing.20.maxGalleryWidth.cObject = CASE
tt_content.textmedia.dataProcessing.20.maxGalleryWidth.cObject {
	key.field = colPos
	##Hauptinhalt
	0 = TEXT
	0.value = 750
	##Inhalt ueber ganze Breite
	1 = TEXT
	1.value = 1140
	##Randspalte
	2 = TEXT
	2.value = 360
}
##css for responsive images
plugin.tx_frontend._CSS_DEFAULT_STYLE.stdWrap.append = TEXT
plugin.tx_frontend._CSS_DEFAULT_STYLE.stdWrap.append.value (

  /*firefox doesn't make images responsive without:*/
  .ce-gallery figure, .ce-gallery figcaption {display: block;}
  .ce-intext.ce-left .ce-gallery {
   margin-right: 0 !important;
  }
  .ce-center .ce-outer,.ce-center .ce-inner {
    float: none;
    right: 0;
}
  .ce-intext.ce-right .ce-gallery {
  margin-left: 0 !important;
  }
  .ce-intext > .ce-gallery {
  width: 100%;
  }
  .ce-intext > .ce-bodytext {
  width:100%;
  }
  .ce-column {
  margin-right: 0;
  padding-right: {$styles.content.textmedia.textMargin}px;
  }
  .ce-right .ce-column {
  padding-left: {$styles.content.textmedia.textMargin}px;
  padding-right: 0;
  }
  .ce-above .ce-gallery, .ce-below .ce-gallery {
  margin-right: -{$styles.content.textmedia.textMargin}px;
  }
  .ce-right.ce-above, .ce-right.ce-below {
  margin-left: -{$styles.content.textmedia.textMargin}px;
  margin-right: 0;
  }
  [data-ce-columns="1"] .ce-column {
  max-width: 100%;
  }
  [data-ce-columns="2"] .ce-column {
  max-width: 50%;
  }
  [data-ce-columns="3"] .ce-column {
  max-width: 33.33333333%;
  }
  [data-ce-columns="4"] .ce-column {
  max-width: 25%;
  }
  .ce-intext > .ce-gallery {
  width: 41.6667%;
  }
  .ce-intext.ce-nowrap > .ce-bodytext {
  width: 58.3333%;
  }
  .ce-left.ce-above .ce-gallery,
  .ce-left.ce-below .ce-gallery
  {float: none;}
  /*firefox adjustement so that images over whole width are responsive*/
  @media all and (max-width: {$styles.content.textmedia.maxW}px) {
    .ce-above .ce-gallery[data-ce-columns="1"],
    .ce-below .ce-gallery[data-ce-columns="1"] {
      float: none;
    }
  }
)



