<?php

declare(strict_types=1);
require_once '../Transaction.php';

// std class & object casting
$str = '{"a":1,"b":2,"c":3}';
$arr = json_decode($str, true); //true for associative array
var_dump($arr); //array(3) { ["a"]=> int(1) ["b"]=> int(2) ["c"]=> int(3) }
echo '<br/>';
$arr = json_decode($str); //true for associative array
// Object which is an instance of stdClass the keys of the json will become properties of the class and the value will become values of those properties
var_dump($arr); //object(stdClass)#1 (3) { ["a"]=> int(1) ["b"]=> int(2) ["c"]=> int(3) }
echo '<br/>';
var_dump($arr->a); //int(1) accessing the properties of the class
echo '<br/>';

// Creating the object using the stdClass
$obj = new \stdClass();
$obj->a = 1;
$obj->b = 2;
var_dump($obj); //object(stdClass)#2 (2) { ["a"]=> int(1) ["b"]=> int(2) }
echo '<br/>';

// Casting thing to object by using (object)

$arr = [1,2,3];
$obj = (object)$arr;
var_dump($obj); //object(stdClass)#1 (3) { ["0"]=> int(1) ["1"]=> int(2) ["2"]=> int(3) }
echo '<br/>';
// cannot access like this will throw error Parse error: syntax error, unexpected integer "1", expecting variable or "{" or "$" in D:\Learning\php-gio\src\public\index.php on line 32
// var_dump($obj->$1); OR var_dump($obj->1);

// For accessing $obj properties use {}
var_dump($obj->{1}); //int(2)
echo '<br/>';

// Casting integer, float, boolean, null
$obj = (object)1;
var_dump($obj); //object(stdClass)#2 (1) { ["scalar"]=> int(1) }
var_dump($obj->scalar);
echo '<br/>';

$obj = (object)false;
var_dump($obj); //object(stdClass)#1 (1) { ["scalar"]=> bool(false) }
var_dump($obj->scalar); // bool(false)
echo '<br/>';

$obj = (object)null; //is casted to an empty object without any property
var_dump($obj); //object(stdClass)#2 (0) { }
echo '<br/>';


echo '<br/>';
echo '<br/>';

// Classes & Objects

// $transaction = new Transaction();

// var_dump($transaction); //object(Transaction)#1 (2) { ["amount"]=> NULL ["description"]=> NULL }
// var_dump($transaction->amount); //NULL
// Fatal error: Uncaught Error: Cannot access private property Transaction::$description in D:\Learning\php-gio\src\public\index.php:11 Stack trace: #0 {main} thrown in D:\Learning\php-gio\src\public\index.php on line 12
// var_dump($transaction->description); //fatal error when accessing private member of a class



$transaction = new Transaction(100, 'Transactio  1');
var_dump($transaction); //object(Transaction)#1 (2) { ["amount"]=> float(100) ["description"]=> string(13) "Transactio 1" }

$transaction->addTax(8);
var_dump($transaction); //object(Transaction)#1 (2) { ["amount"]=> float(108) ["description"]=> string(13) "Transactio 1" }
$transaction->applyDiscount(10);
var_dump($transaction); //object(Transaction)#1 (2) { ["amount"]=> float(97.2) ["description"]=> string(13) "Transactio 1" }

var_dump($transaction->getAmount()); //float(97.2)
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

// Method chaining $this return and return type should be of classtype(ClassName)
    // public function addTax(float $rate) {
    //     $this->amount += $this->amount * $rate / 100;
    // }

    // public function applyDiscount(float $rate) {
    //     $this->amount -= $this->amount * $rate / 100;
    // }

$transaction1 = new Transaction(100, 'Transaction 2');
$transaction1->addTax(8)->applyDiscount(10); //method chaining
var_dump($transaction1->getAmount()); //float(97.2)

echo '<br/>';
echo '<br/>';
// direct chainging wrap class in bracket
$amount = (new Transaction(100, 'Transaction 3'))
                ->addTax(8)
                ->applyDiscount(10)
                ->getAmount();
var_dump($amount); //float(97.2)

echo '<br/>';
echo '<br/>';
// creating class using variable
$class = 'Transaction';
$amount = (new $class(100, 'Transaction 3'))
                ->addTax(8)
                ->applyDiscount(10)
                ->getAmount();
var_dump($amount); //float(97.2)


/**
 * Destruct (the rest of the script will not work after destruct)
 * $amount = (new Transaction(100, 'Transaction 1'))
 *               ->addTax(8)
 *               ->applyDiscount(10)
 *               ->getAmount();
 * var_dump($amount); //Destruct will be call first(Destruct Transaction 1) and then float(97.2) will be printed
 * $transaction = (new Transaction(100, 'Transaction 1'))
 *               ->addTax(8)
 *               ->applyDiscount(10);
 * var_dump($transaction->getAmount()); //float(97.2) will be printed and then Destruct will be call first(Destruct Transaction 1)
 * $transaction = (new Transaction(100, 'Transaction 1'))
 *               ->addTax(8)
 *               ->applyDiscount(10);
 * $amount = $transaction->getAmount();
 * var_dump($amount); //float(97.2) will be printed and then Destruct will be call first(Destruct Transaction 1)
 * Can use unset or null for destroying the object
 * $transaction = (new Transaction(100, 'Transaction 1'))
 *               ->addTax(8)
 *               ->applyDiscount(10);
 * $amount = $transaction->getAmount();
 * unset($transaction);
 * OR setting the transaction object to null will give same result
 * $transaction = null;
 * var_dump($amount); //Destruct will be call first(Destruct Transaction 1) and then float(97.2) will be printed
 * if exit statement is written before var_dump($amount) then also the destruct method will be called
 */

