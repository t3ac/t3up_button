<?php

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function () {
    
    // Add PageTSConfig
	ExtensionManagementUtility::addPageTSConfig("@import 'EXT:t3up_button/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig'");
    
    // Register icons
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    
    $iconRegistry->registerIcon(
        'headerbutton_icon',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:t3up_button/Resources/Public/Icons/headerbutton_icon.svg']
   ); 
    
    $iconRegistry->registerIcon(
        'imagebutton_icon',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:t3up_button/Resources/Public/Icons/symbolbutton_icon.svg']
        ); 
    
    $iconRegistry->registerIcon(
        'imagebutton_icon',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:t3up_button/Resources/Public/Icons/imagebutton_icon.svg']
        ); 
});
