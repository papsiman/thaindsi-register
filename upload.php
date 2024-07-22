<?php

require_once("config.php");

$target_dir = "uploads/";

// File 1

$date = new DateTime();

$target_file1 = $target_dir.$_POST['idNo'].'_'.$date->format('YmdHis').'_'.'filetype1.'.pathinfo($_FILES["fileToUpload1"]["name"], PATHINFO_EXTENSION);
$uploadOk1 = 0;
$imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file1)) {
  echo "หนังสือขอความอนุเคราะห์ฝึกงานเคย upload ลงไปแล้ว.</br>";
  $uploadOk1 = 0;
}

// Check file size
else if ($_FILES["fileToUpload1"]["size"] > 5000000) {
  echo "หนังสือขอความอนุเคราะห์ฝึกงานของคุณมีขนาดใหญ่เกิน 5 MB.</br>";
  $uploadOk1 = 0;
}

else {
  if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1)) {
    $uploadOk1 = 1;
  } else {
    echo "ไม่สามารถ upload หนังสือขอความอนุเคราะห์ฝึกงานได้.</br>";
  }
}


// File 2

$target_file2 = $target_dir.$_POST['idNo'].'_'.$date->format('YmdHis').'_'.'filetype2.'.pathinfo($_FILES["fileToUpload2"]["name"], PATHINFO_EXTENSION);
$uploadOk2 = 0;
$imageFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".</br>";
    $uploadOk2 = 1;
  } else {
    echo "File is not an image.</br>";
    $uploadOk2 = 0;
  }
}

// Check if file already exists
if (file_exists($target_file2)) {
  echo "รูปถ่ายหน้าตรงเคย upload ลงไปแล้ว.</br>";
  $uploadOk2 = 0;
}

// Check file size
else if ($_FILES["fileToUpload2"]["size"] > 5000000) {
  echo "รูปถ่ายหน้าตรงของคุณมีขนาดใหญ่เกิน 5 MB.</br>";
  $uploadOk2 = 0;
}

else {
  if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
    $uploadOk2 = 1;
  } else {
    echo "ไม่สามารถ upload รูปถ่ายหน้าตรงได้.</br>";
  }
}

if($uploadOk1 == 1 && $uploadOk2 == 1){

  $sql = "INSERT INTO applicants (`CreateDate`, `TitleName`, `FirstName`, `LastName`, `NickName`, `BirthDate`, `Age`, `CongenitalDisease`, `Tel`, `IdNo`, `Address`, `Email`, `IdLine`, `University`, `Major`, `Year`, `Grade`, `StartDate`, `EndDate`, `Talent`, `Parent`, `ParentTel`, `SelectType`,`FileName`,`PicName`) VALUES (Now(),'".$_POST['titleName']."','".$_POST['firstName']."','".$_POST['lastName']."','".$_POST['nickName']."',STR_TO_DATE('".$_POST['birthDate']."','%d/%m/%Y'),'".$_POST['age']."','".$_POST['congenitalDisease']."','".$_POST['tel']."','".$_POST['idNo']."','".$_POST['address']."','".$_POST['email']."','".$_POST['idLine']."','".$_POST['university']."','".$_POST['major']."','".$_POST['year']."','".$_POST['grade']."',STR_TO_DATE('".$_POST['startDate']."','%d/%m/%Y'),STR_TO_DATE('".$_POST['endDate']."','%d/%m/%Y'),'".$_POST['talent']."','".$_POST['parent']."','".$_POST['parentTel']."','".$_POST['selectType']."','".$target_file1."','".$target_file2."')";
  //$sql = "INSERT INTO applicants (`CreateDate`, `TitleName`, `FirstName`, `LastName`, `NickName`) VALUES (Now(),'".$_POST['titleName']."','".$_POST['firstName']."','".$_POST['lastName']."','".$_POST['nickName']."')";
  //$sql = "INSERT INTO applicants (`CreateDate`, `TitleName`, `FirstName`, `LastName`, `NickName`, `BirthDate`) VALUES (Now(),'".$_POST['titleName']."','".$_POST['firstName']."','".$_POST['lastName']."','".$_POST['nickName']."',STR_TO_DATE('".$_POST['birthDate']."','%d/%m/%Y'))";

  if ($conn->query($sql) === TRUE) {
    echo 'ลงทะเบียนนักศึกษาฝึกงานสำเร็จ <a href="/register/index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>';

    $selectType = '';
    if($_POST['selectType'] == 1){
        $selectType = 'กองบัญชาการ';
    }
    else if($_POST['selectType'] == 2){
        $selectType = 'อนุสรณ์สถานแห่งชาติ(จ.ปทุมธานี)';
    }
    else if($_POST['selectType'] == 3){
        $selectType = 'วิทยาลัยป้องกันราชอาณาจักร';
    }
    else if($_POST['selectType'] == 4){
        $selectType = 'วิทยาลัยเสนาธิการทหาร';
    }
    else if($_POST['selectType'] == 5){
        $selectType = 'สถาบันจิตวิทยาความมั่นคง';
    }
    else if($_POST['selectType'] == 6){
        $selectType = 'ศูนย์ฝึกยุทธศาสตร์';
    }
    else if($_POST['selectType'] == 7){
        $selectType = 'โรงเรียนเตรียมทหาร (จ.นครนายก)';
    }
    else if($_POST['selectType'] == 8){
        $selectType = 'โรงเรียนช่างฝีมือทหาร (เขตจตุจักร)';
    }
    else if($_POST['selectType'] == 9){
        $selectType = 'สำนักการศึกษาทหาร';
    }
    else if($_POST['selectType'] == 10){
        $selectType = 'สถาบันภาษากองทัพไทย (เขตดุสิต)';
    }

    // Send line noti

    $sMessage = "เรียน Admin: ".$selectType."\r\n";
    $sMessage .= "ระบบได้รับข้อมูลของนักศักษาที่สนใจฝีกงานของ ".$_POST['titleName'].' '.$_POST['firstName']." ".$_POST['lastName']." กรุณาพิจารณา ภายใน 7 วัน";

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


  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

}
else{
  echo 'ลงทะเบียนนักศึกษาฝึกงานไม่สำเร็จ กรุณาลองใหม่อีกครั้ง <a href="/register/register.php" class="p-2"><i class="fa fa-pencil" aria-hidden="true"></i> ลงทะเบียน</a>';
}

?>