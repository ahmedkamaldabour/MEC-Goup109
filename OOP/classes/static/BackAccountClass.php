<?php
class BackAccountClass
{

    private static $balance = 0;

    public function deposit($amount)
    {
        self::$balance += $amount;
    }


    public function withdraw($amount)
    {
        if (self::$balance >= $amount) {
            self::$balance -= $amount;
        } else {
            echo 'Insufficient balance';
        }
    }

    public static function getBalance()
    {
        return 'Your balance is: ' . self::$balance;
    }


}

// belal
$accountOne = new BackAccountClass();
$accountOne->deposit(100);
$accountOne->withdraw(50);
//echo $accountOne->getBalance(); // 50

echo "\n";

// ali
$accountTwo = new BackAccountClass();
$accountTwo->deposit(200);
//echo $accountTwo->getBalance(); // 250

echo "\n";

// ashore
$accountThree = new BackAccountClass();
$accountThree->deposit(250);
//echo $accountThree->getBalance(); // 500

echo BackAccountClass::getBalance(); // 550