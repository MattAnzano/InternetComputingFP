<?php
require_once 'db_connection.php';
session_start();

$query = $db->prepare('SELECT * FROM questions');

$query->execute();
$result = $query->fetchAll();

if (!$result) {
    $_SESSION['mi_err'] = true;
    header('Location: questions.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Questions List</title>
</head>


<body>
    <nav class="nav nav-pills justify-content navbar navbar-dark bg-secondary">
        <a class="text-sm-center nav-link active navbar-brand" aria-current="page" href="index.php">Welcome to HTMLhelp</a>
        <a class="text-sm-center nav-link active navbar-brand" aria-current="page" href="questions.php">Questions</a>
        <a class="nav-link text-sm-left nav-link active navbar-brand" href="logout.php" role="button" aria-expanded="page">Logout</a>
    </nav><br>
    <center>
        <span class="border border-dark" style="display: inline-block;">
            <a href="questions.php"><img src="learn-html-and-css-copy.png" width="360" height="150" alt="Learn HTML and CSS Picture"></a>
        </span>
    </center>
    <h1>
        <center>Welcome to our questions page, here you will be able to choose the questions you would like to try from the list below!</center>
    </h1>
    <h4>
        <center>Don't worry, we will give you an option to see the answer and explain why that is the correct answer</center>
    </h4>
    <br>
    <p>
        <?php
        if ($result) {
            $i = 0;
            $count = 0;
            foreach ($result as $row) {
                $Answer = $row['Answer'];
                echo $i + 1 . ". " . '<label for="question">' . $row['Question'] . '</label>';
                echo "<br>";
                echo '<select id="question" name="question">';
                for ($j = 0; $j < 4; $j++) {
                    echo '<option value="$row[$j + 1]" name="$row[$j+1]">' . $row[$j + 1] . '</option>';
                    // if ($row['Answer']) {
                    //     $count++;
                    // }
                }
                $i = $i + 1;
                echo '</select>';
                echo '<br><br>';
                echo '<button onclick="myFunction()">Answer</button>';
                echo '<p id="demo"></p>';
                echo '<br><br><br>';
            }
        }
        ?>
        <script>
            function myFunction() {
                document.getElementById("demo").innerHTML = '<?= $row[5] ?>';
            }
        </script>
        <br>

        <br>
        <br>
    </p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>