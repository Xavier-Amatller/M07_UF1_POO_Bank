<?php namespace ComBank\OverdraftStrategy;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/28/24
 * Time: 1:39 PM
 */
use ComBank\OverdraftStrategy\Contracts\OverdraftInterface;

/**
 * @description: Grant 100.00 overdraft funds.
 * */
class BasicOverdraft implements OverdraftInterface
{
    public function isGrantOverdraftFunds(float $amount): bool
    {
        return $amount >= $this->getOverdraftFundsAmount();
    }

    public function getOverdraftFundsAmount(): float
    {
        return -50.00;
    }

    public function getInterestAmount(): float{
        return 0.05;
    }
}
