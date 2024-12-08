<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML 5 Forms</title>
</head>
<body>
    <h1>HTML 5 FORMS</h1>

    <!-- action: Backend processor script (Blank, ? or # for itself) -->
    <!-- method: GET (Key-Value pairs are visible in the URL) or POST (Invisible payload) -->
    <form action="script.php" method="GET" onsubmit="return validateForm()">
        <!-- for: Equal to the id of another control -->
        <label for="fullname">Full Name:</label>
        <input name="fullname" id="fullname" type="text"
            value="Default"
            placeholder="Surname, Given Name, Middle Name"
            size="50"   >
        
        <br> <input type="email">

        <br> <input type="password">

        <br> <input type="number" step="0.01" value="123.56">

        <br> <input type="date">

        <br>
        <br> Favorite subject(s): <br>
        <input type="checkbox" id="subjS"> <label for="subjS">Science</label> <br>
        <input type="checkbox" id="subjT"> <label for="subjT">Technology</label> <br>
        <input type="checkbox" id="subjE"> <label for="subjE">English</label> <br>
        <input type="checkbox" id="subjM"> <label for="subjM">Mathematics</label> <br>

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