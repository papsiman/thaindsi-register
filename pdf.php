<?php

include "fpdf186/fpdf.php";
include "config.php";
require_once("common/convertThaiFormat.php");

// Get data
$id = $_GET['id'];
$sql = "SELECT * FROM applicants WHERE Id = ".$id;
$results = $conn->query($sql);
$result = $results->fetch_assoc();

//Print PDF

$pdf = new FPDF('P','mm','A4');

$pdf->AddFont('THSarabunNew','','THSarabunNew.php');
$pdf->AddFont('THSarabunNew','B','THSarabunNew_b.php');

$pdf->AddPage();

$pdf->SetFont('THSarabunNew','',16);

$pdf->Cell(15);
$pdf->Cell(1, 10, iconv('UTF-8', 'cp874', 'นฝ .......... / ..........'));

$pdf->Image("assets/img/20201008132355.png", 100, 20, 18, 30);

$pdf->SetFont('THSarabunNew','',18);
$pdf->SetY(60);
$pdf->Cell(80);
$pdf->Cell(0, 0, iconv('UTF-8', 'cp874', 'ใบตอบรับนักศึกษาฝึกงาน'), 0, 'C');

$pdf->SetFont('THSarabunNew','',16);
$pdf->SetY(70);

$selectType = '';
if ($result['SelectType'] == 1) {
    $selectType = 'กองบัญชาการ';
} else if ($result['SelectType'] == 2) {
    $selectType = 'อนุสรณ์สถานแห่งชาติ(จ.ปทุมธานี)';
} else if ($result['SelectType'] == 3) {
    $selectType = 'วิทยาลัยป้องกันราชอาณาจักร';
} else if ($result['SelectType'] == 4) {
    $selectType = 'วิทยาลัยเสนาธิการทหาร';
} else if ($result['SelectType'] == 5) {
    $selectType = 'สถาบันจิตวิทยาความมั่นคง';
} else if ($result['SelectType'] == 6) {
    $selectType = 'ศูนย์ฝึกยุทธศาสตร์';
} else if ($result['SelectType'] == 7) {
    $selectType = 'โรงเรียนเตรียมทหาร (จ.นครนายก)';
} else if ($result['SelectType'] == 8) {
    $selectType = 'โรงเรียนช่างฝีมือทหาร (เขตจตุจักร)';
} else if ($result['SelectType'] == 9) {
    $selectType = 'สำนักการศึกษาทหาร';
} else if ($result['SelectType'] == 10) {
    $selectType = 'สถาบันภาษากองทัพไทย (เขตดุสิต)';
}

$y = $pdf->GetY()+9;
$pdf->Line(120,$y,200,$y);

$y = $pdf->GetY()+19;
$pdf->Line(34,$y,99,$y);
$pdf->Line(123,$y,200,$y);

$y = $pdf->GetY()+29;
$pdf->Line(90,$y,133,$y);
$pdf->Line(150,$y,200,$y);

$y = $pdf->GetY()+39;
$pdf->Line(37,$y,101,$y);

// $text = '           สถาบันวิชาการป้องกันประเทศ ไม่ขัดข้อง และยินดีให้    '.$result['TitleName'].' '.$result['FirstName'].' '.$result['LastName'].'
// จาก    '.word($result['University'],110).' เข้าฝึกงาน ณ    '.$selectType.'
// สถาบันวิชาการป้องกันประเทศ ตั้งแต่วันที่ '.DateThai((new DateTime($result['StartDate']))->format('Y-m-d')).' ถึงวันที่ '.DateThai((new DateTime($result['EndDate']))->format('Y-m-d')).'
// ตามที่    '.word($result['University'],110).' ขอความอนุเคราะห์';

// Line 1
$pdf->SetY(70);
$pdf->Cell(15);
$pdf->Cell(1, 10, iconv('UTF-8', 'cp874', '           สถาบันวิชาการป้องกันประเทศ ไม่ขัดข้อง และยินดีให้    '));
$pdf->Cell(95);
$pdf->Cell(1, 10, iconv('UTF-8', 'cp874', $result['TitleName'].' '.$result['FirstName'].' '.$result['LastName']));

// Line 2

$pdf->SetY(85);
$pdf->Cell(15);
$pdf->Cell(1, 0, iconv('UTF-8', 'cp874', 'จาก'));
$pdf->Cell(10);
$pdf->Cell(1, 0, iconv('UTF-8', 'cp874', $result['University']));

$pdf->SetY(85);
$pdf->Cell(90);
$pdf->Cell(1, 0, iconv('UTF-8', 'cp874', 'เข้าฝึกงาน ณ'));
$pdf->Cell(24);
$pdf->Cell(1, 0, iconv('UTF-8', 'cp874', $selectType));

// Line 3

$pdf->SetY(95);
$pdf->Cell(15);
$pdf->Cell(1, 0, iconv('UTF-8', 'cp874', 'สถาบันวิชาการป้องกันประเทศ ตั้งแต่วันที่'));
$pdf->Cell(65);
$pdf->Cell(1, 0, iconv('UTF-8', 'cp874', DateThai((new DateTime($result['StartDate']))->format('Y-m-d'))));

$pdf->SetY(95);
$pdf->Cell(125);
$pdf->Cell(1, 0, iconv('UTF-8', 'cp874', 'ถึงวันที่'));
$pdf->Cell(15);
$pdf->Cell(1, 0, iconv('UTF-8', 'cp874', DateThai((new DateTime($result['EndDate']))->format('Y-m-d'))))
;

// Line 4

$pdf->SetY(105);
$pdf->Cell(15);
$pdf->Cell(1, 0, iconv('UTF-8', 'cp874', 'ตามที่'));
$pdf->Cell(10);
$pdf->Cell(1, 0, iconv('UTF-8', 'cp874', $result['University']));

$pdf->SetY(105);
$pdf->Cell(93);
$pdf->Cell(1, 0, iconv('UTF-8', 'cp874', 'ขอความอนุเคราะห์'));

// Line 5

$pdf->SetY(110);
$pdf->MultiCell(0, 10, iconv('UTF-8', 'cp874', '            จึงเรียนมาเพื่อทราบ'));

// End of content

$pdf->SetY(150);
$pdf->Cell(100);
$pdf->MultiCell(0, 10, iconv('UTF-8', 'cp874', 'พลอากาศเอก'));
$pdf->Image("assets/img/signature.JPG", 140, 145, 50, 20);

$pdf->Cell(130);
$pdf->MultiCell(0, 10, iconv('UTF-8', 'cp874', '( ภูมิใจ เลขสุนทรากร )'));
$pdf->Cell(115);
$pdf->MultiCell(0, 10, iconv('UTF-8', 'cp874', 'ผู้บัญชาการสถาบันวิชาการป้องกันประเทศ'));

$pdf->SetY(200);
$pdf->Cell(15);
$pdf->Cell(1, 10, iconv('UTF-8', 'cp874', 'ผู้ประสานงาน'));

$pdf->SetY(205);
$pdf->Cell(15);
$pdf->Cell(1, 20, iconv('UTF-8', 'cp874', 'พ.อ. กานต์ โคตร์สันเทียะ'));

$pdf->SetY(210);
$pdf->Cell(15);
$pdf->Cell(1, 30, iconv('UTF-8', 'cp874', 'โทร ๐๘ ๑๓๔๕ ๕๓๙๗'));

$pdf->OutPut();

function word($msg, $maxsize){
    for ($x = 0; $x <= $maxsize; $x++) {
        $msg = $msg.'';
    }
    return substr($msg, 0, $maxsize);
}


?>