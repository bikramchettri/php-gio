<?php
// Numbers without decimal points

// PHP_INT_MAX;
// PHP_INT_MIN;

// integer can be represented as

// decimal
$x = 5;
echo $x . '<br/>';

// hexadecimal (0x)
$x = 0x2A;
echo $x . '<br/>'; //42

// octal (0)
$x = 055;
echo $x . '<br/>'; //45

// binrary (0b)
$x = 0b11;
echo $x . '<br/>'; //3

$x = PHP_INT_MAX;
var_dump($x); //int(9223372036854775807)
echo  '<br/>';

$x = PHP_INT_MAX + 1;
// what happens if it integer is overflowed
var_dump($x); //float(9.223372036854776E+18)

echo  '<br/>';
// type casting
$x = (int) 5.645;
var_dump($x); //5
echo  '<br/>';

$x = (int) true;
var_dump($x); //1
echo  '<br/>';

$x = (int) false;
var_dump($x); //0
echo  '<br/>';

$x = (int) '5';
var_dump($x); //5
echo  '<br/>';

$x = (int) '123ddd';
var_dump($x); //123
echo  '<br/>';

$x = (int) '87';
var_dump($x); //87
echo  '<br/>';

$x = (int) 'jkjkj';
var_dump($x); //0 converted to zero
echo  '<br/>';

$x = (int) null;
var_dump($x); //0 converted to zero
echo  '<br/>';

// use is_int to check if value is interger or not
// if integer will return 1 and if not will return empty string
echo is_int(1); //1
echo is_int("zzz"); //empty
var_dump(is_int("zzz")); //bool(false)

//For readibility purpose _ can be used as seperator
$salary = 20_000;
var_dump($salary);

$salary = (int)'20_000';
// int(20) will be printed and other value after _ will be removed
var_dump($salary);
