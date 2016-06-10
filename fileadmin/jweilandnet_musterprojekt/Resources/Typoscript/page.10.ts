####### content elements #######

page.10 = FLUIDTEMPLATE
page.10 {
## Set the template path
partialRootPath = {$resourceDir}/Fluidtemplates/Partials/
layoutRootPath = {$resourceDir}/Fluidtemplates/Layouts/
variables {
	content0 < styles.content.get
	content1 < styles.content.get
	content1 {
		select.where = colPos = 1
		}
	content2 < styles.content.get
	content2 {
		select.where = colPos = 2
	}
	## 3 Boxes for home page
	content10 < styles.content.get
	content10 {
		select.where = colPos = 10
		stdWrap.required = 1
		stdWrap.wrap = <div class="col-md-4">|</div>
	}
	content11 < .content10
	content11 {
		select.where = colPos = 11
	}
	content12 < .content10
	content12 {
		select.where = colPos = 12
	}
	languageMenu = TEXT
	languageMenu.value = {$langMenu}
	}
}

## Assign the Template files with the Fluid Backend-Template
page.10.file.stdWrap.cObject = CASE
page.10.file.stdWrap.cObject {
  key.data = pagelayout

  # Default Template
  default = TEXT
  default.value = {$resourceDir}/Fluidtemplates/Templates/DefaultTemplate.html

  # Standard
  pagets__1 < .default

  # Home
  pagets__2 = TEXT
  pagets__2.value = {$resourceDir}/Fluidtemplates/Templates/HomeTemplate.html

}