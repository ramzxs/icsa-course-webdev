<?php
// print_r($_GET);          // One-Dimensional Array
// $_POST
// $_REQUEST
echo "Welcome, " . $_REQUEST['name'] . '!<br>'; // Index or Key is from HTML name="???" attribute
echo 'Your password is \'' . $_REQUEST['pass'] . '\'.<br>';
echo 'You are ' . $_REQUEST['age'] .' years old.<br>';