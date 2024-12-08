<?php
// URL using GET:   http://localhost/icsa-course-webdev/forms/script.php?fullname=
//                  http://localhost/icsa-course-webdev/forms/script.php?fullname=Test
// URL using POST:  http://localhost/icsa-course-webdev/forms/script.php

// 3 Arrays that hold Form Data:
// $_GET['key']
// $_POST['key']
// $_REQUEST['key'] = $_GET || $_POST

echo '$_REQUEST: ';
print_r($_REQUEST);
echo '<hr><br>';

// Check first if the form has been submitted, before accessing any array items
// Because the visitor type directly the URL
if (isset($_REQUEST['fullname'])) {
    echo $_REQUEST['fullname']; // [] Array item access operator; 
} else { ?>
    <p>The form has not been submitted properly.</p>
    <a href="default.php">Go Back</a>
    <?php
}