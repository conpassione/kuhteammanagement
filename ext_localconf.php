<?php
declare(strict_types=1);

// use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use Conpassione\kuhteammanagement\Controller\TeamAufnahmeController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

ExtensionUtility::configurePlugin(
    // extension name, matching the PHP namespaces (but without the vendor)
    'kuhteammanagement',
    // arbitrary, but unique plugin name (not visible in the backend)
    'TeamAufnahme',
    // all actions
    [TeamAufnahmeController::class => 'list, neuesteam, delete'],
    // non-cacheable actions
    [TeamAufnahmeController::class => 'list, neuesteam, delete'],
    ExtensionUtility:: PLUGIN_TYPE_CONTENT_ELEMENT,
);

$GLOBALS['TYPO3_CONF_VARS']['MAIL']['layoutRootPaths'][366510] = 'EXT:kuhteammanagement/Resources/Private/Emails/Layouts/';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['templateRootPaths'][366510] = 'EXT:kuhteammanagement/Resources/Private/Emails/Templates/';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['partialRootPaths'][366510] = 'EXT:kuhteammanagement/Resources/Private/Emails/Partials/';
