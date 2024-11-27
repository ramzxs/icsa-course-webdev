<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>
    <h1>PHP Basics</h1>

    <?php
    /**
     * LEARNING A PROGRAMMING LANGUAGE
     */

    /*
    1. COMMENTS (Non-executable; Ignored by the compiler/interpreter)
    2. STATEMENTS (Executable) */
    // Single Line Comment

    // 3. VARIABLES, DATA TYPES and ASSIGNMENT STATEMENTS (= operator)
    // Rule: Doesn't start with a number, .; _ is ok
    $variableName = 1;  // Number
    $i = 2;
    $f = 1.2345;        // Floating-Point Numbers
    $c = "C";           // String
    $s = 'String';
    $b = true;          // Boolean (true or false)
                        // !true  = false
                        // !false = true
                        // Boolean true  = String "1"
                        // Boolean false = String ""
                        // Non-Empty String (" ") = Boolean true
                        // Empty String ("") = Boolean false
                        // Non-Zero Number (1) = Boolean true
                        // Zero Number (0)     = Boolean false
                        
    // Loosely-Typed
    $i = 'Integer';

    // Output
    echo 'Variable i = ' . $i;   // . = String concatenation
    echo "<br>Variable b = $b";  // String interpolation

    // 4. EXPRESSIONS & OPERATORS
    // Term := Value | Variable
    // Expression := Term | Term Operator Term | Term Operator Expression (BNF Format)
    // (a) Grouping Operators:   ( )
    // (b) Numerical Operators:  + - * / % (modulo or remainder operator)
    //             intval() function
    $a = 10;       // Literal Value, Constants
    $b = 4;        // User Input, Output of other Processes
    $c = $a % $b;  // 10 % 4 = 2 remainder 2 ==> 2
    echo "<br>c = $c";
    // (c) Conditional/Logical Operators:  == != < <= > >= (true or false)
    echo "<br>Test 1 ? " . (1 == 1); // "1"
    echo "<br>Test 2 ? " . (1 > 1);  // ""
    echo "<br>Test 3 ? " . (1 != 1); // ""
    // (d) Tertiary Operator: ?:
    echo "<br>Test 4 ? " . ((10 <= 10) ? 'True' : 'No');
    // (e) Unary Operators:
    //     ++ (Increment)
    //     -- (Decrement)
    //     ! (Logical Not)
    $a = 3;
    $a++; // Add 1 to the old value; $a = 4
    echo "<br>a = " . $a++; // Retrieve/use 4; then add 1; $a = 5 
    echo "<br>a = " . ++$a; // Add 1 immediately, then use the new value; $a = 6
    $b = 3;
    echo "<br>b = " . --$b;

    // (f) Bitwise Operators
    // 0010 << 2 == 1000 (shift 2 to the left)
    

    // CHALLENGE 1
    $x = 5;
    $y = $x + 5 * 3;  // y = x + 5 * 3
                      // 5 + 5 * 3 = 10 * 3 = 30 (X)
                      // MDAS  5 + 15 = 20 (/)
    $y =  (9*($x^2))+(6*$x)+3; //  (9 * ($x * $x)) + (6 * $x) + 3;  // y = 9x^2 + 6x + 3
                                          // 9(25) + 30 + 3 = 258
    echo "<br>x = $x";
    echo "<br>y = $y";
    
    // CHALLENGE 2
    $celsius = 123;
    $fahrenheit = ($celsius * (9 / 5)) + 32; // (123°C × 9/5) + 32 = 253.4°F
    echo "<br>$celsius &deg;C = $fahrenheit &deg;F";

    // CHALLENGE 3
    $rad = 10;
    $circum = 2 * pi() * $rad; // C = 2 * pi * r; pi() ==> PHP Library Function Call
    echo "<br>Radius = $rad; Circumference = $circum";

    // CHALLENGE 4
    $len = 55;    // Square
    $perim = $len * 4;  // P = side1 + side2 + side3 + side4 = 4 * len
    echo "<br>Length = $len; Perimeter = $perim";
    ?>
</body>
</html>