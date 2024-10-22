<?php

namespace ComBank\History;

use ComBank\Transactions\Contracts\BankTransactionInterface;

/**
 * Created by VS Code.
 * User: XavierAmatller
 * Date: 10/18/24
 * Time: 18:51 PM
 */

 class TransactionHistory{

    private $transactions = [];

    public function addTransaction(BankTransactionInterface $transaction){
        
        $transactionTipe = $transaction->getTransaction();
        $transactionAmount = $transaction->getAmount();
        
        $this->transactions = [$transactionTipe, $transactionAmount, new \DateTime()];
    }

    public function getTransactions(): array{
        return $this->transactions;
    }
    
 }