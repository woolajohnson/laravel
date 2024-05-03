<?php
/*
Create a class called "BankAccount" with the following properties:

account number account name Balance

Create a constructor method that will accept account number and account name as arguments. The initial balance of the account should be set to 0.

Add the following methods for this class:

deposit($amount) - add the given amount to the balance of the account withdraw($amount) - subtract the given amount from the balance of the account checkBalance() - display the current balance of the account Create two instances of the BankAccount class. Deposit 1000 into the first account, withdraw 500 from it, and then display its current balance. Deposit 5000 into the second account, withdraw 2000 from it, and then display its current balance.
*/

class BankAccount {
    public $account_number;
    public $account_name;
    public $account_balance = 0;

    public function __construct($account_number, $account_name) {
        echo "Account Name: " . $this->account_name = $account_name . "<br>";
        echo "Account Number: " . $this->account_number = $account_number. "<br>";
    }
    
    public function deposit($amount) {
        $this->account_balance += $amount;
    }
    public function withdraw($amount) {
        $this->account_balance -= $amount;
    }
    public function checkBalance() {
        echo "Current Balance: " . $this->account_balance . "<br><br>";
    }
}

$account1 = new BankAccount(12345, "John");
$account1->deposit(1000);
$account1->withdraw(500);
$account1->checkBalance();

$account2 = new BankAccount(456789, "Michael");
$account2->deposit(5000);
$account2->withdraw(2000);
$account2->checkBalance();