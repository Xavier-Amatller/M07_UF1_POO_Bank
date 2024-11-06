<?php

namespace ComBank\Bank;

use ComBank\Bank\BankAccount;

class InternationalBankAccount extends BankAccount
{
    public function __construct(float $balance)
    {
        parent::__construct($balance);
    }

    public function getConvertedBalance(): float
    {
        return 0.0;
    }

    public function getConvertedCurrency(): string
    {
        return "";
    }
}
