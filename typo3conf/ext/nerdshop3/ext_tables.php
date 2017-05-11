<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Schmutt.Nerdshop3',
            'Pi1',
            'Nerdshop 3'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Nerdshop3');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nerdshop3_domain_model_product', 'EXT:nerdshop3/Resources/Private/Language/locallang_csh_tx_nerdshop3_domain_model_product.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nerdshop3_domain_model_product');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nerdshop3_domain_model_size', 'EXT:nerdshop3/Resources/Private/Language/locallang_csh_tx_nerdshop3_domain_model_size.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nerdshop3_domain_model_size');

    },
    $_EXTKEY
);
