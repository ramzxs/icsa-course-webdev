<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>ARRAYS</h1>

    <p>Data Structures and Algorithm</p>

    <?php
    $var1 = 1;
    $var2 = 2;
    $var100 = 100;

    // Array Declaration and Initialization
    $numbers = array();
    $numbers = [1, 2, 33, 44];
    //                0  1   3  4   5      // Key
    $numbers = array(55, 6, 77, 8, 99);    // Value

    // Count
    $N = count($numbers);
    echo $N.'<br>';

    // Array Item Access
    // Access Operator [index]
    echo $numbers[0].'<br>';    // First Item
    echo $numbers[$N-1].'<br>'; // Last Item

    // List all items
    for ($i = 0; $i < $N; $i++) {
        echo $numbers[$i].' ';
    }

    echo '<hr>';
    // foreach Loop
    // Syntax: foreach($array as [$key =>] $value) { body }
    foreach ($numbers as $key => $val) { // Key-Value Pair
        // echo ($key + 1).'. '.$numbers[$key].'<br>';
        echo ($key + 1).'. '.$val.'<br>';
    }


    // CHALLENGE
    ?>
</body>
</html>