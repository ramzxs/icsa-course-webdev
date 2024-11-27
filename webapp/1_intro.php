<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro to PHP</title>
</head>
<body>
    <h1>Intro to PHP</h1>

    <p>I would call it only a website if it only has HTML, CSS and JavaScript files.</p>

    <p>Web apps are those sites with more advanced features/functionalities written using programming languages like PHP.</p>

    <p>Static message</p>

    <br>String literal 1
    <br>String constant 2

    <?php
    // We don't need PHP when we are printing constants
    // We could have just used HTML
    echo '<br>String literal 1'; // Output a string ('' or "")
    ?>

    <?= "<br>String constant 2" // echo Shortcut ?>

    <?php
    /* If all you have are static HTML, CSS and JS code,
    then you don't even need to save this file as .php,
    just save this as .html file. */ ?>
</body>
</html>