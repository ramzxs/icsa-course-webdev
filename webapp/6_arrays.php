<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <h1>ARRAYS</h1>

    <p>Data Structures and Algorithms</p>

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
    echo $N . '<br>';

    // Array Item Access
    // Access Operator [index]
    echo $numbers[0] . '<br>';    // First Item
    echo $numbers[$N - 1] . '<br>'; // Last Item
    
    // List all items
    for ($i = 0; $i < $N; $i++) {
        echo $numbers[$i] . ' ';
    }

    echo '<hr>';
    // foreach Loop
    // Syntax: foreach($array as [$key =>] $value) { body }
    foreach ($numbers as $key => $val) { // Key-Value Pair
        // echo ($key + 1).'. '.$numbers[$key].'<br>';
        echo ($key + 1) . '. ' . $val . '<br>';
    }


    // CHALLENGE
    $sales = [100, 88, 90, 175, 215, 230, 255, 250];

    $N = count($sales);
    $totalSales = 0;
    $min = $sales[0];
    $max = $sales[0];

    for ($i = 0; $i < $N; $i++) {
        $totalSales += $sales[$i];

        if ($sales[$i] < $min) {
            $min = $val;
        }

        if ($sales[$i] > $max) {
            $max = $val;
        }
    }    

    echo "<hr>Total Sales: <b>$totalSales</b><br>";
    echo "<hr>Average Sale: <b>" . ($totalSales / $N) . "</b><br>";
    echo "<hr>Minimum Sale: <b>$min</b><br>";
    echo "<hr>Maximum Sale: <b>$max</b><br>";

    // PSEUDOCODE
    // $min = 99999;  [100000, 100001, 100002]
    // $min = firstItem = 100000
    // loop
    //     if item < min
    //         min = item
    // print min
    
    // foreach ($sales as $key => $val) { // index => item
    //     if ($val < $min) {
    //         $min = $val;
    //     }
    
    //     if ($val > $max) {
    //         $max = $val;
    //     } 
    // }

    $arr = [5, 1, 2, 4, 3];
    echo '<hr>';
    print_r($arr);

    echo '<hr>';
    sort($arr);
    print_r($arr);
    ?>
</body>

</html>