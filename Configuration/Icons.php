<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'tx-kuhteammanagement-neueteamdliste' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:kuhteammanagement/Resources/Public/Icons/neueteamsliste.svg',
    ],

    'tx-kuhteammanagement-neuesteam' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:kuhteammanagement/Resources/Public/Icons/neuesteam.svg',
    ],


    /*    'tx-myext-bitmapicon' => [
            'provider' => BitmapIconProvider::class,
            'source' => 'EXT:my_extension/Resources/Public/Icons/mybitmap.png',
            // All icon providers provide the possibility to register an icon that spins
            'spinning' => true,
        ],*/

];
