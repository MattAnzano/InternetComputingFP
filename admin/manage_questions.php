<?php
require_once '../../db_connection.php';
session_start();

/*$query = $db->prepare("SELECT * FROM questions");
$result = mysql_query($query);

while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

    print_r($row);
}

exit();*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </title>Manage Questions</title>
</head>

<body>
    <nav class="nav nav-pills justify-content navbar navbar-dark bg-secondary">
        <a class="text-sm-center nav-link active navbar-brand" aria-current="page" href="index.php">Welcome to HTMLhelp</a>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-sm-left nav-link active navbar-brand" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Sign In/Register</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="signin.php">Sign In</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="register.php">Register</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="admin/adminlogin.php">Admin</a></li>
            </ul>
        </li>
    </nav>
</body>

</html>