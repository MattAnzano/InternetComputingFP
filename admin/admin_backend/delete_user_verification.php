<?php
require_once '../../db_connection.php';
session_start();

$user = $_POST['Username'];

$query = $db->prepare('DELETE FROM Users WHERE Username = :user');
$query->bindParam(':user', $user);

if ($query->execute()) {
    $_SESSION['del_success'] = true;
} else {
    $_SESSION['del_fail'] = true;
}
header('Location: ../manage_users.php');

$db = null;
exit();
