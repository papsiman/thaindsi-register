<?php
    session_start();
    if($_POST['username'] == 'admin' && $_POST['password'] == 'P@ssword1'){
        $_SESSION["Alive"] = "Alive";
        header("Location: applicant.php");
    }
    else{
        $_SESSION["Alive"] = "";
        header("Location: login.php");
    }

?>