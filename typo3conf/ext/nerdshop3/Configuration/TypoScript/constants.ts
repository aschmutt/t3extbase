
plugin.tx_nerdshop3_pi1 {
  view {
    # cat=plugin.tx_nerdshop3_pi1/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:nerdshop3/Resources/Private/Templates/
    # cat=plugin.tx_nerdshop3_pi1/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:nerdshop3/Resources/Private/Partials/
    # cat=plugin.tx_nerdshop3_pi1/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:nerdshop3/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_nerdshop3_pi1//a; type=string; label=Default storage PID
    storagePid =
  }
}
