<?php
// URL using GET:   http://localhost/icsa-course-webdev/forms/script.php?fullname=Ramz
//                  http://localhost/icsa-course-webdev/forms/script.php?fullname=
// URL using POST:  http://localhost/icsa-course-webdev/forms/script.php

// 3 Arrays that hold Form Data:
// $_GET['key']
// $_POST['key']
// $_REQUEST['key'] = $_GET || $_POST
echo $_REQUEST['fullname']; // [] Array item access operator; 