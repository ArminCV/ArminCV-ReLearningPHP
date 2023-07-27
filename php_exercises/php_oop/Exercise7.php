<?php
    class BankAccount
    {
        private $accountNumber;
        private $balance;

        public function __construct($accountNumber)
        {
            $this->accountNumber = $accountNumber;
            $this->balance = 0;
        }

        public function getAccountNumber()
        {
            return $this->accountNumber;
        }

        public function getBalance()
        {
            return $this->balance;
        }

        public function deposit($amount)
        {
            $this->balance += $amount;
            echo "Deposited " . $amount . " into account " . $this->accountNumber . 
            ". New balance: " . $this->balance . "<br>";
        }

        public function withdraw($amount)
        {
            if($amount > $this->balance)
            {
                echo "Want to withdrawn " . $amount . "?<br>";
                echo "Insufficient balance in account " . $this->accountNumber .
                ". Current Balance: " . $this->balance . "<br>";
            }
            else {
                $this->balance -= $amount;
                echo "Withdrawn " . $amount . " from account " . $this->accountNumber .
                ". New Balance:  " . $this->balance . "<br>";
            }
        }
    }

    $accountNumber = "SB-1234";
    $account = new BankAccount($accountNumber);
    echo "Account Number: " . $account->getAccountNumber() . "<br>";
    echo "Initial Balance: " . $account->getBalance() . "<br>";

    $deposit_amount = 1000;
    $account->deposit($deposit_amount);
    $withdraw_amount = 600;
    $account->withdraw($withdraw_amount);
    $withdraw_amount = 700;
    $account->withdraw($withdraw_amount);
?>