<?php

//Floats

echo PHP_FLOAT_MAX;
echo '<br/>';
echo PHP_FLOAT_MIN;
echo '<br/>';
// "13.5e3" is equivalent to 13.5 * 10^3, which is 13,500.
$x = 13.5e3;
echo $x; // 13500
echo '<br/>';
var_dump($x); // float(13500) since e is present
echo '<br/>';

// "13.5e3" is equivalent to 13.5 * 10^-3, which is 13,500.
$x = 13.5e-3;
echo $x; // 0.0135
echo '<br/>';

// "13.5e3" is equivalent to 13.5 * 10^3, which is 13,500.
$x = 13_000.5e3;
echo $x; // 13000500
echo '<br/>';
var_dump($x); // float(13000500) since e is present
echo '<br/>';

// "13.5e3" is equivalent to 13.5 * 10^3, which is 13,500.
$x = 13_000.5;
echo $x; // 13000500
echo '<br/>';
var_dump($x); // float(13000500) since e is present
echo '<br/>';


$x = (0.1 + 0.7) * 10;
echo $x; //8
echo '<br/>';
// https://youtu.be/d3c_OOD4Jzs?si=JTs71D2VwDDLALRI&t=132
echo floor($x); // 7 Loss of precision in converting into floating point;
// https://www.soa.org/news-and-publications/newsletters/compact/2014/may/com-2014-iss51/losing-my-precision-tips-for-handling-tricky-floating-point-arithmetic/
// https://learn.microsoft.com/en-us/cpp/build/why-floating-point-numbers-may-lose-precision?view=msvc-170
echo '<br/>';


/**
 *
 * $x = floor(0.1 + 0.7) * 10;
 * why it returns 7??
 * The expression you provided:
 * $x = floor(0.1 + 0.7) * 10;
 * evaluates to 7 due to the way floating-point arithmetic works in computers.
 * Here's a step-by-step breakdown of the expression:
 * 0.1 + 0.7 is calculated. In theory, this should be 0.8, but due to the limitations of floating-point representation in computers, it might not be exactly 0.8.
 * The result from step 1 is passed to the floor function. floor rounds down to the nearest integer. In this case, it will round down to the nearest integer, which is 0.
 * Multiply the result from step 2 by 10: 0 * 10, which equals 0.
 * So, the value assigned to $x will be 0, not 7. If you're getting a different result, there might be some additional code or context affecting the result. Ensure that the provided line is executed in isolation, and if there are other relevant parts of the code, consider sharing them for further analysis.
 * What are the limitation??
 * Floating-point numbers in computers are represented in binary using a fixed number of bits. While this representation is very effective for a wide range of values, it has some limitations that can lead to unexpected results. Here are some of the limitations and issues associated with floating-point arithmetic:
 * Precision Limitation: Some decimal numbers cannot be precisely represented in binary floating-point format. For example, the decimal fraction 0.1 cannot be represented exactly in binary, leading to small errors.
 * Rounding Errors: Due to limited precision, rounding errors can accumulate in calculations. This can lead to small discrepancies between the expected and actual results
 * Comparisons and Equality: Comparing floating-point numbers for equality can be problematic due to rounding errors. It's often recommended to use a tolerance or epsilon value when comparing floating-point numbers.
 * Associativity and Order of Operations: The order in which operations are performed can affect the result due to rounding errors. Associativity issues can arise, and rearranging seemingly equivalent expressions may yield different results.
 * Overflow and Underflow: Performing calculations that result in numbers too large (overflow) or too close to zero (underflow) for the chosen representation can lead to loss of precision or even produce infinity or zero.
 * Loss of Significance: Subtracting two nearly equal numbers can lead to a significant loss of precision, a phenomenon known as "catastrophic cancellation."
 * Platform Dependence: Results may vary across different hardware platforms and programming languages due to differences in how they handle floating-point arithmetic.
 * To mitigate these issues, it's essential to be aware of the limitations of floating-point arithmetic and consider alternative approaches, such as using fixed-point arithmetic or arbitrary-precision arithmetic, depending on the specific requirements of the application. Additionally, programming languages and libraries often provide functions and techniques to minimize the impact of floating-point inaccuracies.
 */


$x = ceil((0.1 + 0.7) * 10);
echo $x; //8
echo "<br/>";

// resource https://floating-point-gui.de/
$x = ceil((0.1 + 0.2) * 10);
// 0.1 + 0.2 = 0.3000......4 * 10 = 3.00000......4 (Rounding Up) returns 4
echo $x; //4
echo "<br/>";


$x = 0.23;
$y = 1 - 0.77;

var_dump($x, $y); //float(0.23), float(0.22999999999999998)
echo '<br/>';
if ($x == $y) {
    echo 'Yes' . '<br/>';
} else {
    echo 'No' . '<br/>'; //this will be printed
}

// some opeartion or calculaction might resolved in an undefined value which will be represeeted by a constant called NAN(Not a number)
echo log(-1) . '<br/>';
// This is shown when the float is out of bound
echo INF . '<br/>'; //infinity
// This is shown when the float is out of bound
echo PHP_FLOAT_MAX * 2 . '<br/>'; //INF

$x = PHP_FLOAT_MAX * 2; //INF
var_dump(is_nan($x)); //bool(false)
echo "<br/>";
var_dump(is_infinite($x)); //bool(true)
echo "<br/>";

$x = 5;
var_dump(is_finite($x)); //bool(true)
echo "<br/>";
// // typecasting using (float) cast better
var_dump((float) $x); // float(5)
echo "<br/>";
// typecasting using function floatval
var_dump(floatval($x)); // float(5)
echo "<br/>";

// conversion to float from string
$x = '15.5a';
var_dump((float) $x); // float(15.5)
echo "<br/>";

$x = 'aaaaa';
var_dump((float) $x); // float(0)
echo (float) $x; //0
echo "<br/>";
