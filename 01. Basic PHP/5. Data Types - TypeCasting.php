<?php

/* Data Types & Types Casting*/

# 4 Scalar Types
# bool - true / false
$completed = true;
# int - 1,2,3,-4
$score = 75;
# float - 1.5, 0.05
$price = 8.99;
# string - "Hello World"
$gretting = 'Hello Bikram';

echo $completed . '<br/>';
echo false . '</br>'; //false will print nothing
echo true . '</br>'; //true will be printed as 1
echo $score . '<br/>';
echo $price . '<br/>';
echo $gretting . '<br/>';

//Find data type using gettype or var_dump()
echo gettype($completed) . '<br/>';
echo var_dump($completed) . '<br/>';
echo var_dump(false) . '<br/>';
echo gettype($score) . '<br/>';
echo gettype($price) . '<br/>';
echo gettype($gretting) . '<br/>';

# 4 Compound Types
# array (List of items)
$companies = [1, 2, 3, -0.9, true, 'A'];
print_r($companies);
# object
# callable
# iterable

# 2 Special Types
# resource
# null


// Dynamic types vs statically types
// Automatic type detection
// $x =  12;
// var_dump($x); int(12) //Auto type detection
// $x = '12';
// var_dump($x); string(2) "12" //Auto type detection


// Type coercion
function sum($x, $y)
{
    echo '<br/>';
    var_dump($x, $y);
    return $x + $y;
}

echo '<br/>' . sum(2, 3);
echo '<br/>' . sum(2, '3');


function sum2(int $x, int $y)
{
    // this can be prevented by using php strict_mode
    // declare(strict_types=1)
    $x = 5.5; //overwrite $x to be a float
    echo '<br/>';
    var_dump($x, $y);
    return $x + $y;
}

echo '<br/>' . sum2(2, 3);
echo '<br/>' . sum2(2, '3');

// Type Casting
$u = (int)'5';
echo '<br/>' . $u;
