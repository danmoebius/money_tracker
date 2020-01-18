<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43($_EXTKEY, '');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Dm.' . $_EXTKEY,
    'Groups',
    ['Groups' => 'list'],
    ['Groups' => 'list']
);

$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][''] = 'Dm\\MoneyTracker\\Hooks\\AddTransactionValueToAccount';
$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][''] = 'Dm\\MoneyTracker\\Hooks\\AddTransactionValueToAccount';
