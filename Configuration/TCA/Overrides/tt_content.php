<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || defined('TYPO3') || die('Access denied.');

// Get extension configuration
$extensionConfiguration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['headerbutton']   =  'headerbutton_icon';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['imagebutton']    =  'imagebutton_icon';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['symbolbutton']   =  'symbolbutton_icon';



// Add to content type dropdown
ExtensionManagementUtility::addTcaSelectItem(
    "tt_content",
    "CType",
    ['Headerbutton', 'headerbutton', 'headerbutton_icon', 'container'],
    'tabs',
    'after'
    );

ExtensionManagementUtility::addTcaSelectItem(
    "tt_content",
    "CType",
    ['Symbolbutton', 'symbolbutton', 'symbolbutton_icon', 'container'],
    'tabs',
    'after'
    );

ExtensionManagementUtility::addTcaSelectItem(
    "tt_content",
    "CType",
    ['Imagebutton', 'imagebutton', 'imagebutton_icon', 'container'],
    'tabs',
    'after'
    );

// Add a flexform to the the CTypes
ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:t3up_button/Configuration/FlexForms/headerbutton.xml',
    'headerbutton'
    );

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:t3up_button/Configuration/FlexForms/symbolbutton.xml',
    'symbolbutton'
    );

ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:t3up_button/Configuration/FlexForms/imagebutton.xml',
    'imagebutton'
    );


$GLOBALS['TCA']['tt_content']['types']['headerbutton']=[
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            header,
            header_link,
            subheader,
  	    --div--;LLL:EXT:t3up_button/Resources/Private/Language/locallang_backend.xlf:headerbutton.flexvalues, pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;appearanceLinks,animate,animate_duration,animate_easing,animate_delay,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
    'columnsOverrides' => [
        'header' => [
            'l10n_mode' => 'prefixLangTitle',
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 80,
            ]
        ],
    ]
];

$GLOBALS['TCA']['tt_content']['types']['symbolbutton']=[
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            subheader,
            header_link,
            header,
            bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
            header_position,
  	    --div--;LLL:EXT:t3up_button/Resources/Private/Language/locallang_backend.xlf:headerbutton.flexvalues, pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;appearanceLinks,animate,animate_duration,animate_easing,animate_delay,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
    'columnsOverrides' => [
        'header' => [
            'l10n_mode' => 'prefixLangTitle',
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 40,
            ]
        ],
        'subheader' => [
            'l10n_mode' => 'prefixLangTitle',
            'label' => 'Symbol siehe https://fonts.google.com/icons?query=symbol',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 40,
            ]
        ],
        'bodytext' => [
            'l10n_mode' => 'prefixLangTitle',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
            'config' => [
                'enableRichtext' => false,
                'rows' => 2,
                'max' => 120,
            ]
        ],
    ]
];


$GLOBALS['TCA']['tt_content']['types']['imagebutton']=[
    'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    header,
                    header_link,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
                    assets,
                    overlayfunction,
        		    --div--;LLL:EXT:t3up_button/Resources/Private/Language/locallang_backend.xlf:headerbutton.flexvalues, pi_flexform,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;;appearanceLinks,animate,animate_duration,animate_easing,animate_delay,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
    'columnsOverrides' => [
        'bodytext' => [
            'l10n_mode' => 'prefixLangTitle',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
            'config' => [
                'enableRichtext' => false,
                'rows' => 2,
                'max' => 120,
            ]
        ],
        'assets' => [
            'config' => [
                'maxitems' => '1',
                'minitems' => '1'
            ]
        ],
    ]
];
