<?php

echo "Hello World";

print("google"); //returns value 1
print 'google'; //returns value 1

echo 'Joe\'s Invoice';
echo "Joe's Invoice";

// Variable Start with variable or _
$name = "Bikram";

$x = 1;
$y = $x; //reference by value (the value will remain 1) even if updated
$z = &$x; //reference by address, the value of z will be that same of x whenever updated

$x = 3;

echo $y . ' ' . $z;

$firstName = 'Bikram';
echo 'Hello $firstName';
echo "Hello $firstName"; //double quote for interpolation
echo "Hello {$firstName}"; //double quote for interpolation and curly braces for presentation

echo 'Hello ' . $firstName;
//Comment 1
#Comment 2
/**
 * Multi Line Comment
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Semicolon not needed in single line -->
    <?php echo '<h1>Hello World</h1>' ?>
    <?= '<h1>Hello World</h1>' ?>
</body>

</html>
