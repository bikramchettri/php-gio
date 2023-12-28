<?php

// Constants using two ways
// define('name','value')
// const keyword

// difference
// const created with const keyword are defined at compile time
// while const created with  function are defined at run time
define('STATUS_PAID', 'paid');
$firstName = 'Bikram';
$firstName = 'Joe';

echo $firstName;

// to check if constant is defined
echo defined('STATUS_PAID'); //if defined will return 1
echo STATUS_PAID;

const STATUS = 'failed';
echo STATUS;

if (true) {
    //define function will work as it create const during run time
    define('BAR', 'bar');
    //const keyword will not work as it create const during compile time
    // const FOO = 'foo';
}


$pay = 'PAY';
// dynamically creating STATUS_PAY
define('STATUS_' . $pay, $pay);
// will return 'PAY'
echo STATUS_PAY; //ignore dynamic naming

// predefined constant
echo PHP_VERSION;

// magic constants (magic since their value can change depending on where they are used)

echo __DIR__;
echo __FILE__;
echo __LINE__;


// Variable variables
// a variable variables basically takes the value of the variable and treats that as the name of the new variable

$pizza = 'bar';
$$pizza = 'baz'; // the name of the variable here is bar

echo $pizza;
echo $bar; //return baz
echo $pizza, $bar; // return barbaz
echo $pizza, $$pizza; // return barbaz
echo "$pizza, $$pizza"; // return bar, $bar
echo "$pizza, {$$pizza}"; // return bar, baz
