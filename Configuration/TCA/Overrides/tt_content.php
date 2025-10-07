<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

//ExtensionManagementUtility::addPlugin(
//    [
//        'Liste der aufzunehmenden Teams',
//        'TeamAufnahme',
//        'tx-kuhteammanagement-neueteamsliste'
//    ],
//    'CType',
//    'kuhteammanagement'
//);

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



//(static function (): void {
//    // $pluginKey = 'kuhteammanagement_teamaufname'
//    $pluginKey = ExtensionUtility::registerPlugin(
//        // extension name, matching the PHP namespaces (but without the vendor)
//        'kuhteammanagement',
//        // arbitrary, but unique plugin name (not visible in the backend)
//        'TeamAufnahme',
//        // plugin title, as visible in the drop-down in the backend, use "LLL:" for localization
//        'Liste der neuen Teams',
//        // plugin icon, use an icon identifier from the icon registry
//        'tx-kuhteammanagement-neueteamsliste',
//        // plugin group, to define where the new plugin will be located in
//        'default',
//        // plugin description, as visible in the new content element wizard
//        'Auflistung der neuen Teams, die sich über die Website angemeldet haben',
//    );
//})();
