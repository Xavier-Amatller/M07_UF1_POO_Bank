<?php

namespace ComBank\Bank;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/27/24
 * Time: 7:25 PM
 */

use ComBank\Exceptions\BankAccountException;
use ComBank\Exceptions\InvalidArgsException;
use ComBank\Exceptions\ZeroAmountException;
use ComBank\OverdraftStrategy\NoOverdraft;
use ComBank\Bank\Contracts\BackAccountInterface;
use ComBank\Exceptions\FailedTransactionException;
use ComBank\Exceptions\InvalidOverdraftFundsException;
use ComBank\OverdraftStrategy\Contracts\OverdraftInterface;
use ComBank\Support\Traits\AmountValidationTrait;
use ComBank\Transactions\Contracts\BankTransactionInterface;

class BankAccount implements BackAccountInterface
{

    private  $balance;

    private  $status;

    private  $overdraft;

    function __construct($balance = 100, $status = 'active', $overdraft = null)
    {
        $this->balance = $balance;
        $this->status = $status;
        $this->overdraft = $overdraft;
    }

    public function transaction(BankTransactionInterface $transaction): void
    {
        $transaction->applyTransaction($this);
    }

    public function openAccount(): bool
    {
        return $this->status = true;
    }

    public function reopenAccount(): bool
    {
        if ($this->status) {
            return false; //Aqui tiene que devolver una excepcion
        } else {
            return $this->status = true;
        }
    }

    public function closeAccount(): bool
    {
        return $this->status = false;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getOverdraft(): OverdraftInterface
    {
        return $this->overdraft;
    }

    public function applyOverdraft(OverdraftInterface $overdraft): void {}

    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }


    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
}
