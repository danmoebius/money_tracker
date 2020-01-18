<?php

namespace Dm\MoneyTracker\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Dm\MoneyTracker\Domain\Repository\GroupsRepository;

class GroupsController extends ActionController
{
    /**
     * @var GroupsRepository
     */
    protected $groupsRepository;

    /**
     * @param GroupsRepository $groupsRepository
     */
    public function __construct(GroupsRepository $groupsRepository)
    {
        $this->groupsRepository = $groupsRepository;
    }

    /**
     * @return void
     */
    public function listAction() {
        $this->view->assign('groups', $this->groupsRepository->findAll());
    }
}
