<?php

declare(strict_types=1);

class Transaction {
    // when accessing value without type defintion it will be null
    // but if type is defined then Fatal it will throw error: Uncaught Error: Typed property Transaction::$amount must not be accessed before initialization in D:\Learning\php-gio\src\public\index.php:10 Stack trace: #0 {main} thrown in D:\Learning\php-gio\src\public\index.php on line 10
    // type hinting in classes
    // object(Transaction)#1 (0) { ["amount"]=> uninitialized(float) ["description"]=> uninitialized(string) }
    // public float $amount;
    // public string $description;
    private float $amount;
    private string $description;

    // by default php will assign public to all methods that does not have access modifier
    // constructor is magic method that will be called whenever a new instance of the class is instantiated
    public function __construct(float $amount, string $description) {
        $this->amount = $amount;
        $this->description = $description;
    }

    // method
    public function addTax(float $rate) : Transaction {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }

    public function applyDiscount(float $rate) : Transaction {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }

    public function getAmount() : float {
        return $this->amount;
    }

    // destructor like constructor is a magic method
    // destruct method is called whenever there is no more reference available to the object or when the object is destroyed
    // https://youtu.be/6FW72q5fIx8?si=PMfxI2FdsM99nAH6&t=910
    public function __destruct() {
        echo 'Destruct' . $this->description . '<br/>';
    }
}
