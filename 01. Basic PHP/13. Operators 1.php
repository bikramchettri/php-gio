<?php

/*Operators*/

// Arithmetic Operators (+ - * / % **)
echo '<b>Arithmetic Operators</b>' . '</br>';
$x = 10;
$y = 2;

var_dump($x+$y); //int(12)
echo "</br>";
var_dump($x-$y); //int(8)
echo "</br>";
var_dump($x*$y); //int(20)
echo "</br>";
var_dump($x/$y); //int(5)
echo "</br>";
var_dump($x%$y); //int(0)
echo "</br>";
var_dump($x**$y); //int(100) //exponentiation x^y
echo "</br>";

// Conversion using +/-
$x = '10';
var_dump($x); //string(2) "10"
echo "</br>";
var_dump(+$x); //int(10)
echo "</br>";
var_dump(-$x); //int(-10)
echo "</br>";

// Return data type of division /
$x = 10;
$y = 2;
var_dump($x / $y); //int(5)
echo "</br>";
$y = 3;
var_dump($x / $y); //float(3.3333333333333335)
echo "</br>";
$y = 2.0; //evenly divisible but one of the variable is float the return value will be float
var_dump($x / $y); //float(5)
echo "</br>";
// Division by zero will return Uncaught DivisionByZeroError, use fdiv(a,b) to return infinity
// Fatal error: Uncaught DivisionByZeroError: Division by zero in D:\Learning\php-gio\index.php:43 Stack trace: #0 {main} thrown in D:\Learning\php-gio\index.php on line 44
// var_dump(1/0); //after this program will not execute as it throws error
// echo "</br>";
var_dump(fdiv(1,0)); //float(INF)
echo "</br>";

// Mod % operation will cast the values to integer and then perform operation, the return type is also integer. Use fmod(a,b) for float types

var_dump(10%2); //int(0)
echo "</br>";
var_dump(10.3%2.99); //int(0) (10.3 casted to int 10 and 2.99 casted to int 2 and the remainder is 0)
echo "</br>";
var_dump(fmod(10.3,2.99)); //float(1.33)
echo "</br>";
// Mod operation with negative number, the return value will be negative or positive and it depends on the numerator value
var_dump(-10%4); //int(-2) (Numerator is negative therefore return negative remainder)
echo "</br>";
var_dump(10%-4); //int(2) (Numerator is positive therefore return positive remainder)
echo "</br>";
echo "</br>";



// Assignment Operators (= += -= *= /= %= **=) //Assignment by default is by value and not by reference

echo '<b>Assignment Operator</b>' . '</br>';

$x = 5;
echo "</br>";

$p = $q = 6; //assigning values to multiple variables
var_dump($p,$q); //int(6) int(6)
echo "</br>";

$e = ( $f = 6 ) + 5; //assigning values to multiple variables $e = ($f)6 +5 = 11 and $f=6
var_dump($e,$f); //int(11) int(6)
echo "</br>";

// Shorthand Operator (Combined Operator) If variable not defined and it is used it will give undefined variable warning
$g = 4;
$g += 2;
$n += 5; // Undefined variable $n in D:\Learning\php-gio\index.php on line 85
var_dump($n);
var_dump($g); //int(6)
echo "</br>";
$g -= 2;
var_dump($g); //int(4)
echo "</br>";
$g *= 4;
var_dump($g); //int(16)
echo "</br>";
$g /= 2;
var_dump($g); //int(8)
echo "</br>";
$g %= 3;
var_dump($g); //int(2)
echo "</br>";
$g **= 3; // 2 ^ 3
var_dump($g); //int(8)
echo "</br>";
echo "</br>";


// String Operators (. .=) //Concatenation Operator

echo '<b>String Operators</b>' . '</br>';

$x = 'Hello';
$x = $x . ' World';
var_dump($x); //string(11) "Hello World"
echo "</br>";

$x = 'Hello';
$x .=' World';
var_dump($x); //string(11) "Hello World"
echo "</br>";

$x = 'Hello';
$x = "$x World"; // can be used only in "" string
var_dump($x); //string(11) "Hello World"
echo "</br>";

$x = 'Hello';
$x = "{$x} World"; // // can be used only in "" string and  {} is for readibility
var_dump($x); //string(11) "Hello World"
echo "</br>";

// Comparison Operators (== === != <> !== < > <= >= ?? ?:)
// https://www.php.net/manual/en/language.operators.comparison.php

echo "</br>";
echo '<b>Comparison Operator</b>' . '</br>';

$x = 5;
$y = 3;
var_dump($x == $y); //bool(false)
echo "</br>";

$x = 3;
$y = '3';

var_dump($x == $y); //bool(true) //loose comparison
echo "</br>";

var_dump($x === $y); //bool(false) //strict comparison does type comarison aswell
echo "</br>";

var_dump($x != $y); //bool(false) //loose comparison
echo "</br>";

var_dump($x !== $y); //bool(true) //strict comparison does type comarison aswell
echo "</br>";

// $a <> $b	 ---- Not equal	---- true if $a is not equal to $b after type juggling.
var_dump($x <> $y); //bool(false) //loose inequality same as != comparison
echo "</br>";

$x = 5;
$y = 10;
var_dump($x > $y); //bool(false)
echo "</br>";
var_dump($x < $y); //bool(true)
echo "</br>";
var_dump($x >= $y); //bool(false)
echo "</br>";
var_dump($x <= $y); //bool(true)
echo "</br>";

// Spaceship Operator <=>    --- < = >
// An int less than, equal to, or greater than zero when $a is less than, equal to, or greater than $b, respectively.
var_dump($x <=> $y); //int(-1) (return 0 if x is equal to y, -1 if x is less than y, 1 if x is greater than y)
var_dump(10 <=> 5); //int(1) (return 0 if x is equal to y, -1 if x is less than y, 1 if x is greater than y)
var_dump(10 <=> 10); //int(0) (return 0 if x is equal to y, -1 if x is less than y, 1 if x is greater than y)
echo "</br>";

// Comparison in PHP before PHP 8
// https://youtu.be/t8U2FGjjqM8?si=rmrqdjyi4-lMGkvx&t=636
// When String was compared to number the string was converted to number before the comparison and then it was compared
// For eg, var_dump(0 == 'hello');
// before php8 for e.g, php7.4 the string 'hello' will be converted to a number and it would resolve to 0 and it would look like
// var_dump(0 == '0'); and the output will be true but in php8 the other side will be converted to a string and then comparison takes place. var_dump(0 == 'hello'); 0 will be converted to a string and then string comparison will happen var_dump('0' == 'hello'); and the result will be false
var_dump(0 == 'hello'); //bool(false)
echo '</br>';
//if the string is number then it will be converted to a number and the number comparison happens
var_dump(0 == '0'); //bool(true)
echo '</br>';













// echo '<b>Assignment Operator</b>' . '</br>';
// var_dump(); //
// echo "</br>";

// Error Control Operators (@)

// Increment/Decrement Operators (++ --)

// Logical Operators (&& || and or xor)

// Bitwise Operators (& | ^ ~ << >>)

// Array Operators (+ == === != <> !==)

// Execution Operators (``)

// Type Operators (instanceof)

// Nullsafe Operator - PHP 8 (?)
