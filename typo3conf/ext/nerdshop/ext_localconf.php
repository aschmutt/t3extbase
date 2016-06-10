<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Schmutt.' . $_EXTKEY,
	'Shop',
	array(
		'Product' => 'list, show, new, create, edit, update, delete, filter',
		'Order' => 'list, show, new, create, edit, update, delete, submit',
		
	),
	// non-cacheable actions
	array(
		'Product' => 'list, show, new, create, update, delete, filter ',
		'Order' => 'list, show, new, create, edit, update, delete, submit ',
		
	)
);
