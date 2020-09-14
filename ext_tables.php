<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'AshokaTree.AtVslider',
            'Pi1',
            'AT Vertical Slider'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('at_vslider', 'Configuration/TypoScript', 'AT Vertical Slider');

    }
);
