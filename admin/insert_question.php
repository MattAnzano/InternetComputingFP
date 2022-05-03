<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Question</title>
</head>

<body>
    <form action="insert_question_verification.php" method="POST" id="addQ">
        <center><label class="questions" name="Question">Question</label>
            <input type="text" id="Question" name="Question">
        </center>

        <center><label class="Choice" name="Choice">Choice1</label>
            <input type="text" id="Choice1" name="Choice1">
        </center>

        <center><label class="Choice" name="Choice">Choice2</label>
            <input type="text" id="Choice2" name="Choice2">
        </center>

        <center><label class="Choice" name="Choice">Choice3</label>
            <input type="text" id="Choice3" name="Choice3">
        </center>

        <center><label class="Choice" name="Choice">Choice4</label>
            <input type="text" id="Choice4" name="Choice4">
        </center>

        <center><label class="Answer" name="Answer">Answer</label>
            <input type="text" id="Answer" name="Answer">
        </center>

        <center><button type="submit" form="addQ" value="Submit">Submit</center>

    </form>
</body>

</html>