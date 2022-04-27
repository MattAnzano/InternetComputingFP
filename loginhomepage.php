<?php
$Username = $_POST['exampleInputUserName1'];
$Password = $_POST['exampleInputPassword1'];
$First_Name = $_POST['exampleInputFirstName1'];
$Last_Name = $_POST['exampleInputLastName1'];
$Email = $_POST['exampleInputEmail1'];
$Address = $_POST['exampleInputAddress1'];
$City = $_POST['exampleInputCity1'];
$State = $_POST['exampleInputState1'];
$Zip_Code = $_POST['exampleInputZipCode1'];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <nav class="nav nav-pills justify-content navbar navbar-dark bg-secondary">
        <a class="text-sm-center nav-link active navbar-brand" aria-current="page" href="index.php">Welcome to HTMLhelp</a>
        <a class="text-sm-center nav-link active navbar-brand" aria-current="page" href="questions.php">Questions</a>
        <a class="nav-link disabled text-sm-left navbar-brand" href="#" role="button" aria-expanded="false"><?php echo "Welcome back " . $Username; ?></a>
    </nav><br>
    <center>
        <span class="border border-dark" style="display: inline-block;">
            <img src="learn-html-and-css-copy.png" width="360" height="150" alt="Learn HTML and CSS Picture">
        </span>
    </center>
    <h1>
        <center>Thank you for logging in</center>
    </h1>

</body>

</html>