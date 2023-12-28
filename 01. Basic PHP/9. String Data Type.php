<?php

// Strings
$firstName = 'Will';
$lastName = 'Smith';

$name = $firstName .' '. $lastName;

$fullName = "${firstName} {$lastName}";
echo $firstName . '<br/>'; //Will
echo $lastName . '<br/>'; //Smith
echo $name . '<br/>'; //Will Smith
echo $fullName . '<br/>'; //Will Smith

echo $name[1] . '<br/>'; //i
echo $name[-2] . '<br/>'; //t
$name[1] = 'I';
echo $name . '<br/>'; //WIll Smith
$name[-2] = 'T';
echo $name . '<br/>'; //WIll SmiTh
var_dump($name); //string(10) "WIll SmiTh"
echo '<br/>';

$name[13] = 'Y'; //adding outside bound
var_dump($name); //string(14) "WIll SmiTh Y"
echo '<br/>';
echo (strlen($name)); //14

// Fatal error: Array and string offset access syntax with curly braces is no longer supported in D:\Learning\php-gio\index.php on line 29
// echo $name{1}; //deprecated

$x = 1;
$y = 2;
// Heredoc (Treats string as if they were enclosed in double quotes)
$text = <<<TEXT
Line 1
Line 2 ' "
Line 3
{$name}
{$x} + {$y}
TEXT;
echo '<br/>' . $text; //Line 1 Line 2 ' " Line 3 WIll SmiTh Y 1 + 2 (output in same line)
echo '<br/>';
// Line 1
// Line 2 ' "
// Line 3
// WIll SmiTh Y
// 1 + 2
echo nl2br($text); //output in new line use nl2br()


// Nowdoc (Treats string as if they were enclosed in single quotes 'as a result variable are not supported')
$text = <<<'TEXT'
Line 1 " '
Line 2
Line 3
{$name}
{$x} + {$y}
TEXT;
echo '<br/>' . $text; //Line 1 " ' Line 2 Line 3 {$name} {$x} + {$y} (output in same line)
echo '<br/>';
// Line 1 " '
// Line 2
// Line 3
// {$name}
// {$x} + {$y}
echo nl2br($text); //output in new line use nl2br()
// heredoc and nowdoc no need to escape both '' and "" quote
// Useful for Generating HTML

$text = <<<TEXT
Hello World
TEXT;
echo '<br/>';
var_dump($text); //string(11) "Hello World"

//here before hello world tab is added
$text = <<<TEXT
    Hello World
TEXT;
echo '<br/>';
var_dump($text); //string(15) " Hello World" (tab space is also counted)
echo '<br/>';
