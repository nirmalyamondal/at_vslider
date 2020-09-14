<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'AshokaTree.AtVslider',
            'Pi1',
            [
                'Record' => 'list'
            ],
            // non-cacheable actions
            [
                
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        atvslider {
                            iconIdentifier = atvslider-plugin-pi1
                            title = LLL:EXT:at_vslider/Resources/Private/Language/locallang_db.xlf:tx_atvslider_pi1.name
                            description = LLL:EXT:at_vslider/Resources/Private/Language/locallang_db.xlf:tx_atvslider_pi1.description
                            tt_content_defValues {
                                CType = list
                                list_type = atvslider_pi1
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'atvslider-plugin-pi1',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:at_vslider/Resources/Public/Icons/user_plugin_pi1.svg']
			);
		
    }
);
