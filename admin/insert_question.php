<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Insert Question</title>
</head>

<body>
    <center><h2>Enter a multiple choice question below with 4 potential answers and the correct one.</h2></center>
    <br>
    <br>
    <form action="./admin_backend/insert_question_verification.php" method="POST" id="addQ">
        <center><label class="questions" name="Question">Question: </label>
            <input type="text" id="Question" name="Question">
        </center>
        <br>

        <center><label class="Choice" name="Choice">Choice 1: </label>
            <input type="text" id="Choice1" name="Choice1">
        </center>

        <center><label class="Choice" name="Choice">Choice 2: </label>
            <input type="text" id="Choice2" name="Choice2">
        </center>

        <center><label class="Choice" name="Choice">Choice 3: </label>
            <input type="text" id="Choice3" name="Choice3">
        </center>

        <center><label class="Choice" name="Choice">Choice 4: </label>
            <input type="text" id="Choice4" name="Choice4">
        </center>
        <br>

        <center><label class="Answer" name="Answer">Answer: </label>
            <input type="text" id="Answer" name="Answer">
        </center>
        <br>
        <center><input type = "reset" value = "Reset" class="btn btn-warning"></center>
        <br>

        <center><button type="submit" form="addQ" value="Submit" class="btn btn-primary">Submit</center>

    </form>
    <br>
    <br>
    <br>
    <br>
    <center>Changed your mind?</center>
    <center><form action="../logout.php" method="POST">
        <input type="submit" name="logout" class="btn btn-danger" value = "logout"></input></center>
</body>

</html>