<?php

namespace Dm\MoneyTracker\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Transactions extends AbstractEntity
{
    /**
     * @var string
     */
    protected $description = '';

    /**
     * @var string
     */
    protected $value = '';

    /**
     * @var string
     */
    protected $currentValue = '';

    /**
     * @var string
     */
    protected $newValue = '';

    /**
     * @return string
     */
    public function getDescription() : string
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
    public function getValue() : string
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
     * @return string
     */
    public function getCurrentValue() : string
    {
        return $this->currentValue;
    }

    /**
     * @param string $currentValue
     *
     * @return void
     */
    public function setCurrentValue(string $currentValue)
    {
        $this->currentValue = $currentValue;
    }

    /**
     * @param string $newValue
     *
     * @return void
     */
    public function setNewValue(string $newValue)
    {
        $this->newValue = $newValue;
    }

    /**
     * @return string
     */
    public function getNewValue() : string
    {
        return $this->newValue;
    }
}
