<?php
require_once "config.php";

$sql = "SELECT * FROM applicants WHERE IdNo = '" . $_POST['idNo'] . "'";
$results = $conn->query($sql);
$result = $results->fetch_assoc();

if (mysqli_num_rows($results) > 0) {
    if ($result['RegisterResult'] == '1') {
        header("Location: checkresult_approve.php");
    } else if ($result['RegisterResult'] == '0') {
        header("Location: checkresult_fail.php");
    } else {
        header("Location: checkresult_onprocess.php");
    }
} else {
    header("Location: checkresult_notfound.php");
}

?>
