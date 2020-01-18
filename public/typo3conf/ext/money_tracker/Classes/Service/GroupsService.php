<?php
declare(strict_types=1);

namespace Dm\MoneyTracker\Service;

use Dm\MoneyTracker\Domain\Repository\GroupsRepository;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Persistence\Generic\QueryResult;

class GroupsService
{
    /**
     * @var GroupsRepository
     */
    protected $groupsRepository = null;

    /**
     */
    public function __construct()
    {
        $objectManager = new ObjectManager();
        $this->groupsRepository = $objectManager->get(GroupsRepository::class);
    }

    /**
     * @return array
     */
    public function fetchGroups() : array
    {
        return $this->groupsRepository->findAllAsArray();
    }
}
