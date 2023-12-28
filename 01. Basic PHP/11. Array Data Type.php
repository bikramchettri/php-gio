<?php
// array data type (zero indexed)
// define by either [] or keyword array()
$programmingLanguages = ['PHP', 'Java', 'Python'];

echo $programmingLanguages[0]; //PHP

// Warning: Undefined array key 3 in D:\Learning\php-gio\index.php on line 9
echo $programmingLanguages[3];

// Warning: Undefined array key -1 in D:\Learning\php-gio\index.php on line 12
echo $programmingLanguages[-1]; //cannot access from back of the array using negative number

// Warning: Undefined array key 3 in D:\Learning\php-gio\index.php on line 16
// If accessing key which doesn't exist warning and the value assigned is NULL
$saveValue = $programmingLanguages[3];
var_dump($saveValue); //NULL
echo '<br/>';

// To avoid such errors we can check value is there in the index or not
var_dump(isset($programmingLanguages[3])); //bool(false)
echo '<br/>';
var_dump(isset($programmingLanguages[0])); //bool(true)
echo '<br/>';

// Mutating the array
$programmingLanguages[1] = 'C++';

var_dump($programmingLanguages);
echo '<br/>';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// length of the array
echo count($programmingLanguages); //3

// Add new value to the array
$programmingLanguages[] = 'JAVA';
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// Add new value to the array using array_push(array,value1,value2,....valueN) array push is pass by reference therefore it will update/modify the original array
array_push($programmingLanguages, 'RUST', 'GO');
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';


// Associative Arrays
$programmingLanguages = [
    'php' => '8.0',
    'python' => '3.9'
];

/*
    Array
    (
        [php] => 8.0
        [python] => 3.9
    )
*/
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// Access using key
echo $programmingLanguages['php'] . '<br/>'; //8.0
echo $programmingLanguages['python'] . '<br/>'; //3.9
// Warning: Undefined array key "garbage" in D:\Learning\php-gio\index.php on line 73
echo $programmingLanguages['garbage'] . '<br/>';

// add more programming languages
$programmingLanguages['go'] = '3.1';
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';


// Multi dimensional array

$programmingLanguages = [
    'php' => [
        'creator'   => 'Rasmus Lerdorf',
        'extension'   => '.php',
        'website'   => 'www.php.net',
        'isOpenSource'   => true,
        'versions'  => [
            ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019'],
        ],
    ],
    'python' => [
        'creator'   => 'Guido Van Rossum',
        'extension'   => '.py',
        'website'   => 'www.python.org',
        'isOpenSource'   => true,
        'versions'  => [
            ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version' => 3.8, 'releaseDate' => 'Oct 14, 2019'],
        ],
    ],
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo $programmingLanguages['php']['website']. '<br/>';//www.php.net
echo $programmingLanguages['php']['versions'][0]['releaseDate']. '<br/>'; //Nov 26, 2020


// Duplicate keys
$array = [0 => 'foo', 1 => 'bar', '1' => 'baz'];
// the last key will be use and overwrite the value
// Array ( [0] => foo [1] => baz )
print_r($array);
echo '<br/>';

// https://youtu.be/C8ZFLq24g_A?si=Frs7PaLZxmlL711W&t=673
// the keys have to be string or integer even though php will try to cast when possible
// true casted to 1
// 1 remain 1
// '1' casted to integer 1
// 1.8 casted to integer 1
// null is casted to empty string
// and since all of them is 1 the last key value will overwrite the key 1 and null key will be empty string // Array ( [1] => d [] => e )
$array = [true => 'a', 1 => 'n', '1' => 'c', 1.8 => 'd', null => 'e'];
// Array ( [1] => d [] => e )
print_r($array);
echo '<br/>';
print_r($array['']); //e
echo '<br/>';


// having keys on only some elements
$array = ['a', 50 => 'b', '=>', 'd', 70 => 'e'];
echo '<pre>';
/*
    Output
    Array
    (
        [0] => a
        [50] => b
        [51] => =>
        [52] => d
        [70] => e
    )
*/
print_r($array);
echo '</pre>';
echo '<br/>';



/*
    Removing elements from the array
    array_pop() remove an element from the end
    array_shift() remove an element from the front and the element with numeric key  will get reindexed and unmeric key remain unchanged
    unset() //The array will not be re-indexed in this case
    unset($array); will destroy the whole array
    unset($array[index20],$array[index5]); will remove the element(s) from the array
*/

echo array_pop($array); //prints e
echo '<br/>';
print_r($array); //Array ( [0] => a [50] => b [51] => => [52] => d )
echo '<br/>';
echo array_shift($array); //prints a
echo '<br/>';
print_r($array); //Array ( [0] => b [1] => => [2] => d ) //and array got reindexed
echo '<br/>';



// unset
// https://youtu.be/C8ZFLq24g_A?si=KN90yNJgi3qezUEn&t=898
$array = [1,2,3];
unset($array[0],$array[1],$array[2]); //unsetting all keys of $array

var_dump(sizeof($array)); //int(0)
var_dump(count($array)); //int(0)

// pushing new value in the array $array where 0-2 index has been unset and it will start from index 3
$array[] = 4; // the new value will be added in the key 3
print_r($array); //Array ( [3] => 4 )
echo '<br/>';


// Casting
// casting integer
$x = 5;
var_dump((array)$x); //array(1) { [0]=> int(5) }
echo '<br/>';
// casting string
$x = 'Hello';
var_dump((array)$x); //array(1) { [0]=> string(5) "Hello" }
echo '<br/>';
// casting null
$x = null;
var_dump((array)$x); //array(0) { } (Empty Array)
echo '<br/>';


// Another way to check if key exist in an array
$array = ['a' => 1, 'b' => null];
// array_key_exists will tell if the key actually exist in the array or not
var_dump(array_key_exists('a', $array)); //bool(true)
echo '<br/>';
var_dump(array_key_exists('b', $array)); //bool(true)
echo '<br/>';

// while isset will tell if the key exist and is not null
var_dump(isset($array['a'])); //bool(true)
echo '<br/>';
var_dump(isset($array['b'])); //bool(false)
echo '<br/>';
