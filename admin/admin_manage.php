<?php
require_once '../db_connection.php';
session_start();

$message = '';
if (!isset($_SESSION['logged_in'])) {
    $_SESSION['need_log'] = true;
    header('Location: adminlogin.php');
    $db = null;
    exit();
} else if (isset($_SESSION['reg_success']) && $_SESSION['reg_success'] == true) {
    $message = "<p>You have successfully registered!</p>";
    unset($_SESSION['reg_success']);
} else if (isset($_SESSION['already_li']) && $_SESSION['already_li'] == true) {
    $message = "<p>You are already logged in!</p>";
    unset($_SESSION['already_li']);
} else if (isset($_SESSION['new_log']) && $_SESSION['new_log'] == true) {
    $message = "<p>You are now logged in!</p>";
    unset($_SESSION['new_log']);
} else if (isset($_SESSION['mi_err']) && $_SESSION['mi_err'] == true) {
    $message = "<p>An error has occured. Please try again.</p>";
    unset($_SESSION['mi_err']);
}

$query = $db->prepare("SELECT Username, FirstName, LastName, Email FROM admin");
$query->execute();

$result = $query->fetchAll();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>
        Admin Management
    </title>
</head>

<body>
    <nav class="nav nav-pills justify-content navbar navbar-dark bg-secondary">
        <a class="text-sm-center nav-link active navbar-brand" aria-current="page" href="index.php">Welcome to HTMLhelp</a>
        <a class="nav-link text-sm-center nav-link active navbar-brand" href="../logout.php" role="button" aria-expanded="page">Logout</a>
    </nav><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>