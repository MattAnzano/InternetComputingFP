<?php

    if(array_key_exists('logout', $_POST)){
        logout();
    }

    function logout(){
        session_start();

        session_unset();
        session_destroy();


        header('Location: index.php');
    }

?>
