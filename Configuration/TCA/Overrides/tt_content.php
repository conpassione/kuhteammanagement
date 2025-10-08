<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

call_user_func(
    static function (): void {
        // This makes the plugin selectable in the BE.
        $indexPluginSignature = ExtensionUtility::registerPlugin(
        // extension name, matching the PHP namespaces (but without the vendor)
            'kuhteammanagement',
            // arbitrary, but unique plugin name (not visible in the BE)
            'TeamAufnahme',
            // plugin title, as visible in the drop-down in the BE
            'Liste der neuen Teams',
            // the icon visible in the drop-down in the BE
            'tx-kuhteammanagement-neueteamsliste'
        );
    }
);
