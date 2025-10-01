<?php

declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function (): void {
    // STAFF zusätzliche Icons für Folder-Seiten ... enthält Plugin Feld
    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
        'label' => 'LLL:EXT:kuhteammanagement/Resources/Private/Language/locallang_db.xlf:pagetype.neuesteam.label',
        'icon' => 'tx-kuhteammanagement-neuesteam',
        'value' => 'neuesteam'
    ];
    $GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-neuesteam'] = 'tx-kuhteammanagement-neuesteam';

});
