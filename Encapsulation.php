<?php

class BankAccount
{
    public $balance = 5000;

    public function getbalance()
    {
        return $this->balance;
    }
    public function deposit($amount)
    {
        if($amount > 0 )
            {
                $this->balance += $amount;
            }
    }
    public function withdraw($amount)
    {
        if($amount > 0 )
            {
                $this->balance -= $amount;
            }
    }
}

$account = new BankAccount();
echo $account->getbalance();
$account->deposit(1000);
echo $account->getbalance();
$account->withdraw(1000);
echo $account->getbalance();


?>