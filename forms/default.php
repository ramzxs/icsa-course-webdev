<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML 5 Forms</title>
</head>
<body>
    <h1>HTML 5 FORMS</h1>

    <!-- action = backend script processor (? = itself) -->
    <!-- method = GET (Key-Value pairs are visible in the URL) or POST (Invisible payload) -->
    <form action="script.php" method="GET" onsubmit="return validateForm()">
        <input name="fullname" id="fullname" type="text"
            value="Default"
            placeholder="Surname, Given Name, Middle Name"
            size="50"   >
        
        <br> <input type="email">

        <br> <input type="password">

        <br> <input type="number" step="0.01" value="123.56">

        <br> input type="date">

        <br> Favorite subjects: <br>
        <input type="checkbox"> Science <br>
        <input type="checkbox"> Technology <br>
        <input type="checkbox"> English <br>
        <input type="checkbox"> Mathematics <br>

        <br> Gender: <br>
        <input type="radio" name="g"> Male <br>
        <input type="radio" name="g"> Female <br>

        <br> Civil Status: <br>
        <input type="radio" name="cs"> Single <br>
        <input type="radio" name="cs"> Married <br>
        <input type="radio" name="cs"> Divorced <br>
        <input type="radio" name="cs"> Widow/Widower
        
        <br>
        <br> <button>Send Now</button>
        <br> <button type="reset">Reset</button>
        <br> <button type="button" onclick="doSomething()">Extra</button>
    </form>

    <script>
        function doSomething() {
            alert('Do Something');
        }

        function validateForm() {
            const fullname = document.getElementById('fullname').value;
            if (fullname.trim() == "") {
                alert("Invalid full name.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>