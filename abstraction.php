
<?php
class Account
{
    protected $balance;

    public function __construct($initialBalance)
    {
        $this->balance = $initialBalance;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        if ($this->balance - $amount >= 0) {
            $this->balance -= $amount;
        } else {
        }
    }
    public function getBalance()
    {
        return $this->balance;
    }
}

$account = new Account(100);

$account->deposit(50);

$account->withdraw(25);

$balance = $account->getBalance();
