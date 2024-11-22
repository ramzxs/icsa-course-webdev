<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        label {
            width: 100px;
        }
    </style>
</head>
<body class="container">
    <h1>REGISTRATION</h1>

    <?php
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
                // TODO:
                ?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <?= 
                        isset($_REQUEST['gender'])
                            ?  ($_REQUEST['gender'] == 'M') ? 'Male' : 'Female'
                            : ''
                    ?>
                </td>
            </tr>
            <tr>
                <td>Civil Status:</td>
                <td><?= '' ?></td>
            </tr>
            <tr>
                <td>Hobbies</td>
                <td>
                    <?php
                    if (isset($_REQUEST['hobby'])) {
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
        </table>

        <?php
    } else { ?>

        <a href="index.php" class="btn btn-warning">You have to fill out the registration form first.</a>
        
        <?php
    } ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>