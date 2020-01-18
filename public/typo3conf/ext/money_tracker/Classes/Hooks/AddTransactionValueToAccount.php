<?php

namespace Dm\MoneyTracker\Hooks;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\QueryBuilder;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class AddTransactionValueToAccount
{
    const transaction_table = 'tx_moneytracker_domain_model_transactions';
    const account_table = 'tx_moneytracker_domain_model_accounts';

    public function processCmdmap_preProcess(
        $command,
        $table,
        $id,
        $value,
        \TYPO3\CMS\Core\DataHandling\DataHandler &$pObj
    ) {
        die();
    }

    public function processDatamap_preProcessFieldArray(
        array $fieldArray,
        $table,
        $id,
        \TYPO3\CMS\Core\DataHandling\DataHandler &$pObj
    ) {

        /*
         * TODO: add error message
         */
        if (empty($fieldArray['account']) === true) {
            return null;
        }

        if ($table === $this::transaction_table && (bool)preg_match('/NEW(.*)/', $id) === true) {
            $this->saveValueToAccount($fieldArray);
        }
    }

    /**
     * @param array $modelData
     *
     * @return void
     */
    private function saveValueToAccount(array &$modelData)
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($this::account_table);
        $accountID = (int)$modelData['account'];

        $account = $this->getAccountData($queryBuilder, $accountID);
        $newValue = (string)((float)$account['value'] + (float)$modelData['value']);

        $modelData['current_value'] = $modelData['value'];
        $modelData['new_value'] = $newValue;

        $queryBuilder
            ->update($this::account_table)
            ->where(
                $queryBuilder->expr()->eq('uid', $queryBuilder->createNamedParameter($accountID, \PDO::PARAM_INT))
            )
            ->set('value', $newValue)
            ->execute();
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @param int          $modelID
     *
     * @return array
     */
    private function getAccountData(QueryBuilder $queryBuilder, int $modelID): array
    {
        $result = $queryBuilder
            ->select('*')
            ->from($this::account_table)
            ->where(
                $queryBuilder->expr()->eq('uid', $queryBuilder->createNamedParameter($modelID, \PDO::PARAM_INT))
            )
            ->execute();

        return $result->fetch();
    }

}
