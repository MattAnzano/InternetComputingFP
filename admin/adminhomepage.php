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
    <center>
        <h1><b>Administrator Home Page</b></h1>
        <br>
        <a href="insert_question.php" class="btn btn-primary">Add Questions</a>
        <br>
        <br>
        <form action="../logout.php" method="POST">
        <input type="submit" name="logout" class="btn btn-danger" value = "logout"></input>
    </form>
    </center>

    
</body>

</html>