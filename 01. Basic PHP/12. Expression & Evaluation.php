<?php

// Expressions

$x = 5;

$y = $x;

$z = $x === $y;

function sum($x,$y) {
    return $x + $y;
}

$val = sum(2,3);

echo $val ."</br>";

if($x <= 5) {
    echo 'Hello'."</br>";
}
