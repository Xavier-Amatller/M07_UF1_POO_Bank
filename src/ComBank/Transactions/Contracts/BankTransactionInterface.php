<?php

namespace ComBank\Transactions\Contracts;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/27/24
 * Time: 7:29 PM
 */

use ComBank\Bank\Contracts\BackAccountInterface;
use ComBank\Exceptions\InvalidOverdraftFundsException;
use ComBank\OverdraftStrategy\Contracts\OverdraftInterface;

interface BankTransactionInterface
{
    public function transaction(BankTransactionInterface $account): void;

    public function openAccount():bool;

    public function reopenAccount():bool;

    public function closeAccount():bool;

    public function getBalance():float;

    public function getOverdraft():OverdraftInterface;

    public function applyOverdraft(OverdraftInterface $overdraft): void;

    public function setBalance(float $balance): void;
}
