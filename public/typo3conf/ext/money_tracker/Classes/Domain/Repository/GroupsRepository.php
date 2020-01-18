<?php

namespace Dm\MoneyTracker\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Generic\QueryResult;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * @package Dm\MoneyTracker\Domain\Repository
 */
class GroupsRepository extends Repository
{
    /**
     * @return void
     */
    public function initializeObject() {
        $querySettings = $this->objectManager->get(Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }

    /**
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findAllAsArray() : array
    {
        return $this->createQuery()->execute(true);
    }
}
