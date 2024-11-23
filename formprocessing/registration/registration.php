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

    <form action="processor.php" method="post">
        <label for="fullname">Name:</label>
        <input type="text" name="fullname" id="fullname"
            required value="Test" placeholder="Surname, First, Middle"> <br>

        <label for="dob">Birthdate:</label>
        <input type="date" name="dob" id="dob"> <br>

        <label>Gender:</label>
        <input type="radio" name="gender" id="genderM" value="M"> <label for="genderM">Male</label>
        <input type="radio" name="gender" id="genderF" value="F"> <label for="genderF">Female</label>
        <br>

        <label for="civilStatus">Civil Status:</label>
        <select name="civilStatus" id="civilStatus">
            <option value="S">Single</option>
            <option value="M">Married</option>
            <option value="D">Divorced</option>
            <option value="W">Widow/Widower</option>
        </select>
        <br>


        <label>Hobbies</label>
        <input type="checkbox" name="hobby[]" value="S" id="hobby1"> <label for="hobby1">Singing</label>
        <input type="checkbox" name="hobby[]" value="D" id="hobby2"> <label for="hobby2">Dancing</label>
        <input type="checkbox" name="hobby[]" value="R" id="hobby3"> <label for="hobby3">Reading</label>
        <br>

        <label>Terms</label>
        <input type="radio" name="agreed" id="agreedY" value="Y"> <label for="agreedY">Yes</label>
        <input type="radio" name="agreed" id="agreedN" value="N"> <label for="agreedN">No</label>
        <br>
        
        <label></label>
        <button>Register Now</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>