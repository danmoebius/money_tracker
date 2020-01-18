<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:money_tracker/Resources/Private/Language/locallang_db.xlf:tx_moneytracker_domain_model_transactions',
        'label' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'default_sortby' => 'description ASC',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'account,description,value,current_value,new_value, transactions',
        'iconfile' => 'EXT:money_tracker/Resources/Public/Icons/tx_moneytracker_domain_model_transactions.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, account, description, value ,current_value, new_value, transactions',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, account, description, --div--;LLL:EXT:money_tracker/Resources/Private/Language/locallang_db.xlf:tx_moneytracker_domain_model_transactions.value, value, current_value, new_value , --div--;LLL:EXT:money_tracker/Resources/Private/Language/locallang_db.xlf:tx_moneytracker_domain_model_transactions, transactions, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_moneytracker_domain_model_transactions',
                'foreign_table_where' => 'AND tx_moneytracker_domain_model_transactions.pid=###CURRENT_PID### AND tx_moneytracker_domain_model_transactions.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ],
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ],
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:money_tracker/Resources/Private/Language/locallang_db.xlf:tx_moneytracker_domain_model_transactions.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true
            ],
        ],
        'value' => [
            'exclude' => true,
            'label' => 'LLL:EXT:money_tracker/Resources/Private/Language/locallang_db.xlf:tx_moneytracker_domain_model_transactions.value',
            'config' => [
                'type' => 'input'
            ],
        ],
        'accountId' => [
            'exclude' => true,
            'label' => 'LLL:EXT:money_tracker/Resources/Private/Language/locallang_db.xlf:tx_moneytracker_domain_model_transactions.accountId',
            'config' => [
                'type' => 'input',
                'readOnly' => 1
            ],
        ],
        'current_value' => [
            'exclude' => true,
            'label' => 'LLL:EXT:money_tracker/Resources/Private/Language/locallang_db.xlf:tx_moneytracker_domain_model_transactions.current_value',
            'config' => [
                'type' => 'input',
                'readOnly' => 1
            ],
        ],
        'new_value' => [
            'exclude' => true,
            'label' => 'LLL:EXT:money_tracker/Resources/Private/Language/locallang_db.xlf:tx_moneytracker_domain_model_transactions.new_value',
            'config' => [
                'type' => 'input',
                'readOnly' => 1
            ],
        ],
        'account' => [
            'exclude' => true,
            'label' => 'LLL:EXT:money_tracker/Resources/Private/Language/locallang_db.xlf:tx_moneytracker_domain_model_groups.accounts',
            'config' => [
                'type' => 'select',
                'maxitems' => 1,
                'minitems' => 1,
                'foreign_table' => 'tx_moneytracker_domain_model_accounts',
                'foreign_field' => 'uid'
            ],
        ],
    ],
];
