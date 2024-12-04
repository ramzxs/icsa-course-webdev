<?php
// PHP

// PROCEDURAL PROGRAMMING


/*
FUNCTION DECLARATION
function funcName(parameter1, parameter2) {
    body
    return statement;
} */

// Optional Parameter 
function printTop($title='App Title') {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
    </head>
    <body>
    <?php
}


function printBottom() {
    ?>
    </body>
    </html>
    <?php
}


// Required Parameters
// Create a function that accepts 3 numbers, then prints the smallest and the largest
function getMinMax($a, $b, $c=3) {
    $min = 0;
    $max = 0;

    if ($a < $b) {
        if ($a < $c) {
            $min = $a;
        } else {
            $min = $c;
        }
    } else {
        if ($b < $c) {
            $min = $b;
        } else {
            $min = $c;
        }
    }


    if ($a > $b) {
        if ($a > $c) {
            $max = $a;
        } else {
            $max = $c;
        }
    } else {
        if ($b > $c) {
            $max = $b;
        } else {
            $max = $c;
        }
    }

    echo "Min: $min<br>";
    echo "Max: $max<br>";
}


// SUM
function getSum($a, $b, $c) {
    return $a + $b + $c;
}


// FUNCTION CALL
printTop();

// Built-In PHP Libraries
echo rand();
echo "<br>";
echo rand(min: 1, max: 10);

echo '<hr>';
getMinMax(10, 2);


echo '<hr>';
$sum = getSum(1, 20, 3);
echo "Sum: " . $sum;


printBottom();


// OBJECTED-ORIENTED PROGRAMMING
/*
Object1.step1();
Object1.step2();
Object2.process1();
Object2.process2(); */


// Create a function that generates random N-long string of 0s and 1s
// Digits: 0, 1
// N: Total number of 0s and 1s
// Example: N = 6; RandomString = 010111
// Hints:
// for(1 .. N)
//    rand()