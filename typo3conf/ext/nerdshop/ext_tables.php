<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Schmutt.' . $_EXTKEY,
	'Pi1',
	'Nerdshop'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Nerd Shop');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nerdshop_domain_model_product', 'EXT:nerdshop/Resources/Private/Language/locallang_csh_tx_nerdshop_domain_model_product.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nerdshop_domain_model_product');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nerdshop_domain_model_order', 'EXT:nerdshop/Resources/Private/Language/locallang_csh_tx_nerdshop_domain_model_order.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nerdshop_domain_model_order');
