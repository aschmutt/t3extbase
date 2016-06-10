## Backend-Layouts definieren
mod.web_layout.BackendLayouts {

	## Standard-Layout
	1 {
		title = Standard Layout
		icon = ../fileadmin/jweilandnet_musterprojekt/Resources/Icons/musterprojekt_belayout_standardlayout.png
		config {
			backend_layout {
				colCount = 3
				rowCount = 2
				rows {
					1 {
						columns {
							1 {
								name = Inhalt oben
								colspan = 3
								colPos = 1
							}
						}
					}


					2 {
						columns {
							1 {
								name = Hauptinhalt
								colspan = 2
								colPos = 0
							}
							2 {
								name = Randspalte
								colPos = 2
							}
						}
					}
				}
			}
		}
	}

	## Startseite
	2 {
		title = Startseite
		icon = ../fileadmin/jweilandnet_musterprojekt/Resources/Icons/musterprojekt_belayout_startseite.png
		config {
			backend_layout {
				colCount = 3
				rowCount = 2
				rows {
					1 {
						columns {
							1 {
								name = Inhalt oben
								colspan = 3
								colPos = 1
							}
						}
					}


					2 {
						columns {
							1 {
								name = Inhalt unten 1
								colPos = 10
							}
							2 {
								name = Inhalt unten 2
								colPos = 11
							}
							3 {
								name = Inhalt unten 3
								colPos = 12
							}
						}
					}
				}
			}
		}
	}
}