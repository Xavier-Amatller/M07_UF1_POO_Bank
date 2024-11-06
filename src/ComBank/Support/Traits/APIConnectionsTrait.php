<?php

namespace Src\ComBank\Support\Traits;

use ComBank\Transactions\Contracts\BankTransactionInterface;

trait APIConnections
{
    public function validateEmail(string $email): bool {
        return false;
    }

    public function convertBalance(float $balance): float {
        return 0.0;
    }

    public function detectFraud(BankTransactionInterface $transaction): bool {
        return false;
    }
}
