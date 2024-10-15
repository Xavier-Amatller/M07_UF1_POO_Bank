<?php

namespace ComBank\Transactions;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/28/24
 * Time: 1:22 PM
 */

use ComBank\Bank\Contracts\BackAccountInterface;
use ComBank\Exceptions\InvalidOverdraftFundsException;
use ComBank\Transactions\Contracts\BankTransactionInterface;

class WithdrawTransaction extends BaseTransaction
{

    public function __construct($amount)
    {
        $this->amount = $amount;
    }
    public function applyTransaction(BackAccountInterface $account): float
    {
        return 10;
    }

    public function getTransaction(): string
    {
        return "";
    }

    public function getAmount(): float
    {
        return 10;
    }
}
