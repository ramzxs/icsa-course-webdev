<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <h1>REGISTRATION PROCESSING</h1>

    <?php
    print_r($_REQUEST);
    echo '<hr><br>';


    if ( isset($_POST['fullname']) ) { ?>

        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>Full Name:</td>
                <td><?= $_POST['fullname'] ?></td>
            </tr>
            <tr>
                <td>DOB:</td>
                <td><?= $_POST['dob'] ?></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><?php
                $date1 = date_create(date('Y-m-d'));
                $date2 = date_create($_POST['dob']);
                $diff  = date_diff($date1,$date2);
                echo $diff->format("%y").' year(s) old';
                ?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <?= 
                        isset($_REQUEST['gender'])
                            ?  ($_REQUEST['gender'] == 'M') ? 'Male' : 'Female'
                            : '(Not Set)'
                    ?>
                </td>
            </tr>
            <tr>
                <td>Civil Status:</td>
                <td>
                    <?php
                     switch ($_REQUEST['civilStatus']) {
                        case 'S': echo 'Single<br>'; break;
                        case 'M': echo 'Married<br>'; break;
                        case 'D': echo 'Divorced<br>'; break;
                        case 'W': echo 'Widow/Widower<br>'; break;
                        default:  echo '(Not Set)';
                    } ?>
                </td>
            </tr>
            <tr>
                <td>Hobbies</td>
                <td>
                    <?php
                    if (isset($_REQUEST['hobby'])) {
                        // Checkboxes are sent as an array
                        // print_r($_REQUEST['hobby']);
                        // echo '<br>';
                        // foreach ($arrayName as $keyName => $valueName) {}
                        foreach ($_REQUEST['hobby'] as $key => $val) {
                            switch ($val) {
                                case 'S': echo 'Singing<br>'; break;
                                case 'D': echo 'Dancing<br>'; break;
                                case 'R': echo 'Reading<br>'; break;
                            }
                        }
                    } ?>
                </td>
            </tr>

            <tr>
                <td>Terms:</td>
                <td>
                    <?= isset($_REQUEST['agreed']) 
                        ? (($_REQUEST['agreed'] == 'Y') ? 'Agreed' : 'Disagreed')
                        : '(Not Set)' ?>
                </td>
            </tr>
        </table>

        <?php
    } else {
        ?>

        <a href="index.php" class="btn btn-warning">You have to fill out the registration form first.</a>
        
        <?php
    } ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>