<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Schmutt.Nerdshop3',
            'Pi1',
            [
                'Product' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Product' => 'create, update, delete'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					pi1 {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_pi1.svg
						title = LLL:EXT:nerdshop3/Resources/Private/Language/locallang_db.xlf:tx_nerdshop3_domain_model_pi1
						description = LLL:EXT:nerdshop3/Resources/Private/Language/locallang_db.xlf:tx_nerdshop3_domain_model_pi1.description
						tt_content_defValues {
							CType = list
							list_type = nerdshop3_pi1
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
