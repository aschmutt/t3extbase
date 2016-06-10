## read the background file from page resources
## include as inline style
temp.bodybgr = IMG_RESOURCE
temp.bodybgr {
  file {
      import =  uploads/media/
      import.data = levelmedia:-1, slide
      treatIdAsReference = 1
      import.listNum = 0
    }
}

page.headerData.13 < temp.bodybgr
page.headerData.13.stdWrap.wrap = <style type="text/css">.topheader { background-image: url(/|); }</style>