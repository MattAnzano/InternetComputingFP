<?php
require_once '../../db_connection.php';
session_start();

$query = $db->prepare("SELECT * FROM questions");
$result = mysql_query($query)

while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

    print_r($row);
}

exit();
?>

