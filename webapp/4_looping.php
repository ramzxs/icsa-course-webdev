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
    for ($a = 1; $a <= 5; $a++) { // initialization => { checking => statements => updating } *
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
    // Looping Statements?
        // Branching Statements?
        // Nested Loops (Loops within Loops)?
    
    // i ---> n
    // j ---> i

    // i
    // 1  *       2
    // 2  **      3
    // 3  ***     4
    // 4  ****    5
    // 5  *****   6 (n)
    //    j 1..$i
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
    ?>


    <h2>INVERTED RIGHT TRIANGLE</h2>
    <?php
    // CHALLENGE 2
    // Given n = 7
    // Output:
    // 0 n-i=7 *******
    // 1 n-i=6 ******
    // 2 n-i=5 *****
    // 3 n-i=4 ****
    // 4 n-i=3 ***
    // 5 n-i=2 **
    // 6 n-i=1 *
    $n = 7;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 1; $j <= $n-$i; $j++) {
            echo '*';
        }
        echo "<br>";
    }
    echo '<hr>';
    
    // i
    // 7
    // 6
    // 5
    // 4
    // 3
    // 2
    // 1
    for ($i = $n; $i > 0; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo "<br>";
    }

    // CHALLENGE
    // CHRISTMAS TREE
    $n = 11;
    //      *
    //     ***
    //    *****
    //   *******
    //  *********
    // ***********


    // CHALLENGE
    // DIAMOND
    $n = 5;
    //      *
    //     ***
    //    *****
    //     ***
    //      *
    ?>
</body>
</html>