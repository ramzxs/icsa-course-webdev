<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Looping</title>

    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <h1>PHP LOOPING</h1>

    <p>When you want to run statements multiple times.</p>

    <h2>do-while</h2>
    <?php
    // 1. do-while LOOP (guaranteed at least 1 pass)
    $a = 10;
    do {
        // Statements
        echo $a++.'<br>';
    } while ($a <= 5); // Condition (careful with Forever Loop)
    ?>

    <h2>while</h2>
    <?php
    // 2. while LOOP
    $a = 10;
    while ($a <= 5) {
        echo $a++.'<br>';
    }
    ?>

    <h2>for</h2>
    <?php
    // 3. for LOOP
    for ($a = 1; $a <= 5; $a++) { // initialization; checking; updating
        echo "$a<br>";
    }
    ?>

    <?php /* 4. foreach LOOP (used with Arrays) */ ?>

    <h2>RIGHT TRIANGLE</h2>
    <?php
    // CHALLENGE 1
    // Given n = 5
    // Output:
    // *
    // **
    // ***
    // ****
    // *****
    $n = 5;
    // Branching Statements?
    // Looping Statements?
    // Nested Loops (Loops within Loops)?
    ?>


    <h2>INVERTED RIGHT TRIANGLE</h2>
    <?php
    // CHALLENGE 2
    // Given n = 7
    // Output:
    // *******
    // ******
    // *****
    // ****
    // ***
    // **
    // *
    $n = 7;
    ?>
</body>
</html>