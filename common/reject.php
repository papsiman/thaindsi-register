<?php

    require_once("../config.php");

    $id = $_GET['id'];

    $sql = "UPDATE applicants SET RegisterResult = '0' WHERE Id = ".$id;
    $conn->query($sql);

    header("Location: ../applicant.php");

?>