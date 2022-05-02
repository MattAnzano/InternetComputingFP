<?php
require_once '../../db_connection.php';
session_start();

$question = $_POST['question'];
$query = $db->prepare('DELETE FROM questions WHERE question = :question');
$query->bindParam(":question", $question);

if ($query->execute()) {
    $_SESSION['del_success'] = true;
} else {
    $_SESSION['del_fail'] = true;
}
header('Location: ../manage_questions.php');
$db = null;
exit();
