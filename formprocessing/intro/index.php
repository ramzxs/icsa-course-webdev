<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <h1>FORM PROCESSING</h1>

    <!-- Action: URL -->
    <!-- Method: GET (data are visible in the URL), POST (payload is hidden) -->
    <!-- Key-Value Pair -->
    <form action="processor.php" method="post">
        <input type="text" name="user"> <br>

        <input type="password" name="pass"> <br>

        <input type="number" name="age" value="18"> <br>

        <button>Submit</button>
        <button type="reset">Clear</button>
        <button type="button" onclick="doSomething()">Extra</button>
    </form>
    <script>
        function doSomething() {
            alert('Do Something');
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>