<?php
require_once '../../db_connection.php';
session_start();

$user = $_POST['username'];

$query = $db->prepare('DELETE FROM Admin WHERE Username = :user');
$query->bindParam(':user', $user);

if ($query->execute()) {
    $_SESSION['del_success'] = true;
} else {
    $_SESSION['del_fail'] = true;
}

header('Location: ../admin_manage.php');
$db = null;
exit();
