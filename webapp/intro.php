<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro</title>
</head>
<body>
    <h1>Intro</h1>

    <p>Static message</p>

    <?php
    /* LEARNING A PROGRAMMING LANGUAGE
    1. Comments (Non-executable; Ignored by the compiler/interpreter)
    2. Statements (Executable) */
    // Single Line Comment

    // 3. Variables, Data Types and Assignment Statements (= operator)
    // Rule: Doesn't start with a number, _ is ok
    $i = 1;           // Number
    $f = 1.2345;      // Floating Point
    $c = "C";         // String
    $s = 'String';
    $b = false;        // Boolean (true == "1", false == "")
    // Loosely-Typed
    $i = 'Integer';

    // Output
    echo 'Variable i = ' . $i;   // . = String concatenation
    echo "<br>Variable b = $b";  // String interpolation

    // 4. EXPRESSIONS & OPERATORS
    // Term := Value | Variable
    // Expression := Term | Term Operator Term | Term Operator Expression (BNF Format)
    // Grouping: ( )
    // Numerical:  + - * / % (modulo or remainder operator)
    //             intval() function
    $a = 10;       // Literal Value, Constants
    $b = 4;        // User Input, Output of other Processes
    $c = $a % $b;  // 10 % 4 = 2 remainder 2 ==> 2
    echo "<br>c = $c";
    // Conditional/Logical:  == != < <= > >= (true or false)
    echo "<br>Test 1 ? " . (1 == 1);
    echo "<br>Test 2 ? " . (1 > 1);
    echo "<br>Test 3 ? " . (1 != 1);
    // Unary/Tertiary Operator: ?:
    echo "<br>Test 4 ? " . ((10 < 10) ? 'True' : 'No');

    // CHALLENGE
    
    // $c = 123
    // $f = (1 + $c) ???
    // echo $f;

    // $rad = 10
    // $circum = ???

    // $len = 5 (square)
    // $perim = ???
    ?>
</body>
</html>