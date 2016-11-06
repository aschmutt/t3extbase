<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Schmutt.' . $_EXTKEY,
	'Nerdshop',
	array(
		'Product' => 'list, show, new, create, edit, update, delete, filter, addToCart',
		'Order' => 'list, show, new, create, edit, update, delete, submit',
		
	),
	// non-cacheable actions
	array(
		'Product' => 'list, show, new, create, update, delete, filter, addToCart ',
		'Order' => 'list, show, new, create, edit, update, delete, submit ',
		
	)
);
