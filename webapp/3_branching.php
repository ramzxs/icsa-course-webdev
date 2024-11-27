<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Branching</title>
</head>
<body>
    <h1>PHP BRANCHING</h1>

    <?php
    // 1. if STATEMENT
    $a = 1;
    if ($a == 1) { // conditionalExpression
        // Statement(s)
        // $a = $a + 1;
        // $a += 1;
        $a++; // ++$a
    }
    echo "<br>a = $a";


    // 2. if-else STATEMENT
    $a = 6; // Hard-coded (User Inputs or External Processes)
    if ($a > 5) {
        // True Part
        echo "<br>More than 5";
    } else {
        // False Part
        echo "<br>Less than or equal to 5";
    }


    // 3. if-else-if STATEMENT
    $a = ".";
    if ($a == "A") {
        echo "<br>Letters";
    } else if ($a == "1") {
        echo "<br>Numbers";
    } else if ($a == "#") {
        echo "<br>Symbols";
    } else {
        // Catch-All Block
        echo "<br>Invalid";
    }

    // COMPLEX CONDITIONS
    // && (AND) Operator (true if both are true; false if at least 1 is false)
    // || (OR) Operator (true if at least 1 is true; false if both are false)
    echo "<br>AND Example 1: " . (true && true);    // "1" 
    echo "<br>AND Example 2: " . (false && true);   // ""
    echo "<br>OR Example 1: "  . (false || true);   // "1"
    echo "<br>OR Example 2: "  . (false || false);  // ""

    if ((1 == 1) || (2 > 2) && (3 <= 3)) { // (true) && true = true
        echo "<br>Complex Check Satisfied: YES";
    } else {
        echo "<br>Complex Check Satisfied: NO";
    }


    // 4. switch STATEMENT
    // PHP Language Keywords: switch, case, break, default
    $userChoice = '2';
    switch ($userChoice) {
        case '1':
            echo "<br>One";
            break;
        case '2':
            echo "<br>Two";
            // break;
        case '3':
            echo "<br>Three";
            break;
        default:
            echo "<br>Invalid";
    }


    // CHALLENGE
    // Grading System
    // 1-50    Fail
    // 51-75   Pass
    // 76-90   Merit
    // 91-100  Distinction
    $grade = 101;
    if ($grade >= 1 && $grade <= 50) { // ($grade) = (77) = (non-zero) = (true)
        echo "<br>Fail";
    } else if ($grade >= 51 && $grade <= 75) {
        echo "<br>Pass";
    } else if ($grade >= 76 && $grade <= 90) {
        echo "<br>Merit";
    } else if ($grade >= 91 && $grade <= 100) {
        echo "<br>Distinction";
    } else {
        echo "<br>Invalid";
    } ?>
</body>
</html>