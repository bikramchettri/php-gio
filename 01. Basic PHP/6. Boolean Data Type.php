<?php
// BOOLEANS case insensitive true and TRUE

$isComplete = false;

echo is_bool($isComplete);
var_dump(is_bool($isComplete));

// integers 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false
if ($isComplete) {
    echo "success";
} else {
    echo "fail";
}



// why echo false print empty string?
$isPaid = false;
var_dump($isPaid); //bool(false)
var_dump((string)$isPaid); //string(0) ""
var_dump((string)true); //string(1) "1"
var_dump((string)false); //string(0) ""
