<?php

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

$frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';

ExtensionManagementUtility::addRecordType(
    [
        'label' => 'LLL:EXT:t3up_button/Resources/Private/Language/locallang_db.xlf:headerbutton.title',
        'value' => 'headerbutton',
        'icon' => 'headerbutton_icon',
        'group' => 'container',
        'description' => 'LLL:EXT:t3up_button/Resources/Private/Language/locallang_db.xlf:headerbutton.description',
    ],
    
    '   --palette--;
        ' . $frontendLanguageFilePrefix . 'palette.general;general,
        header,header_link,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
        --div--;LLL:EXT:t3up_button/Resources/Private/Language/locallang_db.xlf:headerbutton.flexvalues, pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,space_after_class,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
    ',
    );

// Add a flexform 
ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:t3up_button/Configuration/FlexForms/headerbutton.xml',
    'headerbutton'
    );

ExtensionManagementUtility::addRecordType(
    [
        'label' => 'LLL:EXT:t3up_button/Resources/Private/Language/locallang_db.xlf:symbolbutton.title',
        'value' => 'symbolbutton',
        'icon' => 'symbolbutton_icon',
        'group' => 'container',
        'description' => 'LLL:EXT:t3up_button/Resources/Private/Language/locallang_db.xlf:symbolbutton.description',
    ],
    
    '   --palette--;
        ' . $frontendLanguageFilePrefix . 'palette.general;general,
        header,header_link,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
        --div--;LLL:EXT:t3up_button/Resources/Private/Language/locallang_db.xlf:symbolbutton.flexvalues, pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,space_after_class,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
    ',
    );

// Add a flexform 
ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:t3up_button/Configuration/FlexForms/symbolbutton.xml',
    'symbolbutton'
    );

ExtensionManagementUtility::addRecordType(
    [
        'label' => 'LLL:EXT:t3up_button/Resources/Private/Language/locallang_db.xlf:imagebutton.title',
        'value' => 'imagebutton',
        'icon' => 'imagebutton_icon',
        'group' => 'container',
        'description' => 'LLL:EXT:t3up_button/Resources/Private/Language/locallang_db.xlf:imagebutton.description',
    ],
    
    '   --palette--;
        ' . $frontendLanguageFilePrefix . 'palette.general;general,
        header,header_link,
        assets,
                    overlayfunction,
        --div--;LLL:EXT:t3up_button/Resources/Private/Language/locallang_db.xlf:symbolbutton.flexvalues, pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,space_after_class,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
    ',
    );

// Add a flexform 
ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:t3up_button/Configuration/FlexForms/imagebutton.xml',
    'imagebutton'
    );


