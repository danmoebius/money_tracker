<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Dm.' . $_EXTKEY,
    'Groups',
    'LLL:EXT:money_tracker/Resources/Private/Language/locallang_db.xlf:moneytracker'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Groups');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_moneytracker_domain_model_groups', 'EXT:money_tracker/Resources/Private/Language/locallang_csh_tx_moneytracker_domain_model_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_moneytracker_domain_model_groups');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_moneytracker_domain_model_accounts', 'EXT:money_tracker/Resources/Private/Language/locallang_csh_tx_moneytracker_domain_model_accounts.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_moneytracker_domain_model_accounts');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_moneytracker_domain_model_transactions', 'EXT:money_tracker/Resources/Private/Language/locallang_csh_tx_moneytracker_domain_model_transactions.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_moneytracker_domain_model_transactions');
