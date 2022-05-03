<?php
require_once '../logout.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Home page</title>
</head>
<body>
    <center><h2><b>Administrator Home Page</b></h2>
    <p>Click the button below to add a question</p><br>
    <a href="insert_question.php" class="btn btn-primary">Insert Class</a></center>

    <form action="../logout.php" method="POST">
        <input type="submit" name="logout" class="btn btn-danger">logout</input>
    </form>
</body>
</html>