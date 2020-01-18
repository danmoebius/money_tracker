<?php

return [
    'frontend' => [
        'dm/moneytracker/apiproxy' => [
            'target' => \Dm\MoneyTracker\Middleware\ApiProxy::class,
            'before' => [
                'typo3/cms-frontend/eid'
            ],
        ],
        'dm/moneytracker/modifycontent' => [
            'target' => \Dm\MoneyTracker\Middleware\ModifiyContent::class,
            'after' => [
                'typo3/cms-frontend/output-compression'
            ]
        ],
    ],
];
