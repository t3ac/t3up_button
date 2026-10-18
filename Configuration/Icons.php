<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'headerbutton_icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:t3up_button/Resources/Public/Icons/headerbutton_icon.svg',
    ],
    'symbolbutton_icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:t3up_button/Resources/Public/Icons/symbolbutton_icon.svg',
    ],
    'imagebutton_icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:t3up_button/Resources/Public/Icons/imagebutton_icon.svg',
    ],
    'buttons' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:t3up_button/Resources/Public/Icons/gridlayout_buttons.svg',
    ]
];