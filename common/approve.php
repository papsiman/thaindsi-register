<?php

    require_once("../config.php");

    $id = $_GET['id'];

    $selectType = '';
    if($_GET['selectType'] == 1){
        $selectType = 'กองบัญชาการ';
    }
    else if($_GET['selectType'] == 2){
        $selectType = 'อนุสรณ์สถานแห่งชาติ(จ.ปทุมธานี)';
    }
    else if($_GET['selectType'] == 3){
        $selectType = 'วิทยาลัยป้องกันราชอาณาจักร';
    }
    else if($_GET['selectType'] == 4){
        $selectType = 'วิทยาลัยเสนาธิการทหาร';
    }
    else if($_GET['selectType'] == 5){
        $selectType = 'สถาบันจิตวิทยาความมั่นคง';
    }
    else if($_GET['selectType'] == 6){
        $selectType = 'ศูนย์ฝึกยุทธศาสตร์';
    }
    else if($_GET['selectType'] == 7){
        $selectType = 'โรงเรียนเตรียมทหาร (จ.นครนายก)';
    }
    else if($_GET['selectType'] == 8){
        $selectType = 'โรงเรียนช่างฝีมือทหาร (เขตจตุจักร)';
    }
    else if($_GET['selectType'] == 9){
        $selectType = 'สำนักการศึกษาทหาร';
    }
    else if($_GET['selectType'] == 10){
        $selectType = 'สถาบันภาษากองทัพไทย (เขตดุสิต)';
    }

    $sql = "UPDATE applicants SET RegisterResult = '1' WHERE Id = ".$id;
    $conn->query($sql);

    // Send line noti
    $sMessage = "เรียน Admin: ".$selectType."\r\n";
    $sMessage .= 'ระบบได้รับข้อมูลของนักศักษาที่สนใจฝีกงานของ '.$_GET['name'] . " ได้ผ่านการพิจารณา!\r\n\r\n\r\n";
    $sMessage .= "สามารถดูใบตอบรับนักศึกษาได้ที่ http://www.thaindsi.org/register/pdf.php?id=".$id;
    //$sMessage .= "สามารถดูใบตอบรับนักศึกษาได้ที่ http://localhost/register/pdf.php?id=".$id;

    $chOne = curl_init(); 
    curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
    curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
    curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
    curl_setopt( $chOne, CURLOPT_POST, 1); 
    curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
    $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$LineToken.'', );
    curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
    curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
    $result = curl_exec( $chOne ); 

    curl_close( $chOne );

    header("Location: ../applicant.php");

?>