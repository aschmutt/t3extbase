
plugin.tx_nerdshop3_pi1 {
  view {
    templateRootPaths.0 = EXT:nerdshop3/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_nerdshop3_pi1.view.templateRootPath}
    partialRootPaths.0 = EXT:nerdshop3/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_nerdshop3_pi1.view.partialRootPath}
    layoutRootPaths.0 = EXT:nerdshop3/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_nerdshop3_pi1.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_nerdshop3_pi1.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_nerdshop3._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-nerdshop3 table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-nerdshop3 table th {
        font-weight:bold;
    }

    .tx-nerdshop3 table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)