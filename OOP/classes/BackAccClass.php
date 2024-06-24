<?php

class BackAccClass
{
    public string $accountNumber;

    public float $balance;

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
        return $this;
    }


    /**
     * @throws Exception
     */
    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            throw new Exception('Can not withdraw this amount : ' . $amount . "\n");
        }
        return $this;

    }

}

// create a new account object
$account = new BackAccClass;

$account->accountNumber = 1;
$account->balance = 100;

try {
    $account->deposit(100)
        ->deposit(200)
        ->withdraw(1000)
        ->deposit(500);
} catch (Exception $e) {
    echo $e->getMessage();
}


echo "Tour balance : " . $account->balance;
