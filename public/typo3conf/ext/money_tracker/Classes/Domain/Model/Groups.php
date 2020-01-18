<?php

namespace Dm\MoneyTracker\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Groups extends AbstractEntity
{
    /**
     * @var string
     */
    protected $title = '';

    /**
     * @var string
     */
    protected $description = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dm\MoneyTracker\Domain\Model\Accounts>
     */
    protected $accounts = null;

    public function __construct()
    {
        $this->initStorageObjects();
    }

    /**
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->accounts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dm\MoneyTracker\Domain\Model\Accounts>
     */
    public function getAccounts(): ObjectStorage
    {
        return $this->accounts;
    }

    /**
     * @param ObjectStorage $accounts
     *
     * @return void
     */
    public function setAccounts(ObjectStorage $accounts)
    {
        $this->accounts = $accounts;
    }

    /**
     * @param Accounts $account
     *
     * @return void
     */
    public function addAccount(Accounts $account)
    {
        $this->accounts->attach($account);
    }

    /**
     * @param Accounts $account
     *
     * @return void
     */
    public function removeAccount(Accounts $account)
    {
        $this->accounts->detach($account);
    }
}
