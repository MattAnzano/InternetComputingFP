<?php
try{
    $dsn = 'mysql:host=localhost; dbname=htmlhelp';
    $db = new PDO ($dsn, "admin", "password");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $error){
    echo "Connection failed: " . $error->getMessage();
}
