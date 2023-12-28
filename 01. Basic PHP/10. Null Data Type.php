<?php
// NUll Data Type
// Null is a special data type that represent a variable with no value
// If it has been
    // 1. assigned a constant NULL
    // 2. not been defined yet
    // 3. or it has been unset

// 1. null constant null or NULL (case insensitive)
$x = null;

//blank (as it get casted to string and when null get casted it is converted to empty string)
echo $x;
var_dump($x); //NULL
echo '<br/>';
// to check if variable is null or not use is_null
var_dump(is_null($x)); //bool(true)
echo '<br/>';
// another way to check if null or not is using === comparison operator
var_dump($x === null); //bool(true)
echo '<br/>';


// 2. variable not defined yet will throw warning and it will be null
// Warning: Undefined variable $y in D:\Learning\php-gio\index.php on line 27
// NULL
var_dump($y);
echo '<br/>';
//Warning: Undefined variable $y in D:\Learning\php-gio\index.php on line 31
// bool(true)
var_dump(is_null($y));
echo '<br/>';


// 3. Explicitly Unsetting variable using unset
$z = 123;
var_dump($z); //int(123)
unset($z);
echo '<br/>';
// Warning: Undefined variable $z in D:\Learning\php-gio\index.php on line 42
// NULL
var_dump($z); //int(123)
echo '<br/>';

// CASTING NULL
$z = null;
var_dump((string)$z); //string(0) "" (Casted to empty string)
echo '<br/>';
var_dump((int)$z); //int(0) (Casted to integer zero)
echo '<br/>';
var_dump((bool)$z); //bool(false) (Casted to boolean false)
echo '<br/>';
var_dump((array)$z); //array(0) { } (Casted to empty array)
