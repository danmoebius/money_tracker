<?php

namespace Dm\MoneyTracker\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Accounts extends AbstractEntity
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
     * @var string
     */
    protected $value = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dm\MoneyTracker\Domain\Model\Transactions>
     */
    protected $transactions = null;

    public function __construct()
    {
        $this->initStorageObjects();
    }

    public function initStorageObject()
    {
        $this->transactions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return void
     */
    public function setValue(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dm\MoneyTracker\Domain\Model\Transactions>
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dm\MoneyTracker\Domain\Model\Transactions>
     *
     * @return void
     */
    public function setTransactions(ObjectStorage $transactions)
    {
        $this->transactions = $transactions;
    }

    /**
     * @param Transactions $transaction
     *
     * @return void
     */
    public function addTransaction(Transactions $transaction)
    {
        $this->transactions->attach($transaction);
    }

    /**
     * @param Transactions $transaction
     *
     * @return void
     */
    public function removeTransaction(Transactions $transaction)
    {
        $this->transactions->detach($transaction);
    }

}
