<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สถาบันวิชาการ ป้องกันประเทศ</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>

    <?php
        require_once("config.php");
        session_start();
        if(isset($_SESSION["Alive"])){
            if($_SESSION["Alive"] != "Alive"){
                header("Location: login.php");
            }
        }

        $id = $_GET['id'];

        $sql = "SELECT * FROM applicants WHERE Id = ".$id;
        $results = $conn->query($sql);
        $result = $results->fetch_assoc();

    ?>

  </head>
  <body class="bg-body-tertiary">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img src="assets/img/20201008132355.png" class="d-block mx-auto mb-4" src="" alt="" height="150px">
                <h2>ระบบรับลงทะเบียนนักศึกษาฝึกงาน</h2>
                <a href="/register/applicant.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
                <a href="/register/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
            </div>
            <hr class="my-4">

            <div class="row g-5">
                <div class="col-md-12 col-lg-12">

                    <h4 class="mb-3">กรุณากรอกลายเอียดให้ครบถ้วน</h4>

                    <form>

                        <div class="row g-3">

                            <div class="col-sm-2">
                                <label for="titleName" class="form-label">คำนำหน้า</label>
                                <input type="text" class="form-control" id="titleName" name="titleName" value="<?php echo $result['TitleName']; ?>" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="firstName" class="form-label">ชื่อ</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $result['FirstName']; ?>" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">นามสกุล</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $result['LastName']; ?>" readonly>
                            </div>

                            <div class="col-sm-2">
                                <label for="nickName" class="form-label">ชื่อเล่น</label>
                                <input type="text" class="form-control" id="nickName" name="nickName" value="<?php echo $result['NickName']; ?>" readonly>
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-3">
                                <label for="birthDate" class="form-label">วัน/เดือน/ปี เกิด</label>
                                <input type="text" class="form-control" id="birthDate" name="birthDate" value="<?php echo (new DateTime($result['BirthDate']))->format('d-m-Y'); ?>" readonly>
                            </div>

                            <div class="col-sm-2">
                                <label for="age" class="form-label">อายุ (ปี)</label>
                                <input type="number" class="form-control" id="age" name="age" value="<?php echo $result['Age']; ?>" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="congenitalDisease" class="form-label">โรคประจำตัว</label>
                                <input type="text" class="form-control" id="congenitalDisease" value="<?php echo $result['CongenitalDisease']; ?>" readonly>
                            </div>

                            <div class="col-sm-3">
                                <label for="tel" class="form-label">เบอร์โทร</label>
                                <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $result['Tel']; ?>" readonly>
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-4">
                                <label for="idNo" class="form-label">เลขที่บัตรประชาชน</label>
                                <input type="text" class="form-control" id="idNo" name="idNo" value="<?php echo $result['IdNo']; ?>" readonly>
                            </div>

                            <div class="col-sm-8">
                                <label for="address" class="form-label">ที่อยู่</label>
                                <input type="text" class="form-control" id="address" name="address" value="<?php echo $result['Address']; ?>" readonly>
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-8">
                                <label for="email" class="form-label">Email (Optional)</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo $result['Email']; ?>" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="idLine" class="form-label">ID Line</label>
                                <input type="text" class="form-control" id="idLine" name="idLine" value="<?php echo $result['IdLine']; ?>" readonly>
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-8">
                                <label for="university" class="form-label">สถานศึกษา</label>
                                <input type="text" class="form-control" id="university" name="university" value="<?php echo $result['University']; ?>" readonly>
                            </div>

                            <div class="col-sm-2">
                                <label for="major" class="form-label">สาขา</label>
                                <input type="text" class="form-control" id="major" name="major" value="<?php echo $result['Major']; ?>" readonly>
                            </div>

                            <div class="col-sm-2">
                                <label for="year" class="form-label">ชั้นปี</label>
                                <input type="number" class="form-control" id="year" name="year" value="<?php echo $result['Year']; ?>" readonly>
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-2">
                                <label for="grade" class="form-label">เกรดเฉลี่ยสะสม</label>
                                <input type="text" class="form-control" id="grade" name="grade" value="<?php echo $result['Grade']; ?>" readonly>
                            </div>

                            <div class="col-sm-5">
                                <label for="startDate" class="form-label">เริ่มฝึกงาน วัน/เดือน/ปี</label>
                                <input type="text" class="form-control" id="startDate" name="startDate" value="<?php echo (new DateTime($result['StartDate']))->format('d-m-Y'); ?>" readonly>
                            </div>

                            <div class="col-sm-5">
                                <label for="endDate" class="form-label">สิ้นสุดฝึกงาน วัน/เดือน/ปี</label>
                                <input type="text" class="form-control" id="endDate" name="endDate" value="<?php echo (new DateTime($result['EndDate']))->format('d-m-Y'); ?>" readonly>
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-12">
                                <label for="talent" class="form-label">ทักษะความสามารถพิเศษ</label>
                                <textarea  class="form-control" id="talent" rows="3" name="talent" value="<?php echo $result['Talent']; ?>" readonly></textarea>
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-8">
                                <label for="parent" class="form-label">ชื่อผู้ปกครองที่สามารถติดต่อได้กรณีฉุกเฺฉิน</label>
                                <input type="text" class="form-control" id="parent" name="parent" value="<?php echo $result['Parent']; ?>" readonly>
                            </div>

                            <div class="col-sm-4">
                                <label for="parentTel" class="form-label">เบอร์โทร</label>
                                <input type="text" class="form-control" id="parentTel" name="parentTel" value="<?php echo $result['ParentTel']; ?>" readonly>
                            </div>

                        </div>

                        <hr class="my-4">

                        <label class="form-label">ข้าพเจ้ามีความประสงค์ฝึกงานในหน่วยงาน สังกัด สถาบันวิชาการป้องกันประเทศ</label>

                        <?php
                            $selectType = '';
                            if($result['SelectType'] == 1){
                                $selectType = 'กองบัญชาการ';
                            }
                            else if($result['SelectType'] == 2){
                                $selectType = 'อนุสรณ์สถานแห่งชาติ(จ.ปทุมธานี)';
                            }
                            else if($result['SelectType'] == 3){
                                $selectType = 'วิทยาลัยป้องกันราชอาณาจักร';
                            }
                            else if($result['SelectType'] == 4){
                                $selectType = 'วิทยาลัยเสนาธิการทหาร';
                            }
                            else if($result['SelectType'] == 5){
                                $selectType = 'สถาบันจิตวิทยาความมั่นคง';
                            }
                            else if($result['SelectType'] == 6){
                                $selectType = 'ศูนย์ฝึกยุทธศาสตร์';
                            }
                            else if($result['SelectType'] == 7){
                                $selectType = 'โรงเรียนเตรียมทหาร (จ.นครนายก)';
                            }
                            else if($result['SelectType'] == 8){
                                $selectType = 'โรงเรียนช่างฝีมือทหาร (เขตจตุจักร)';
                            }
                            else if($result['SelectType'] == 9){
                                $selectType = 'สำนักการศึกษาทหาร';
                            }
                            else if($result['SelectType'] == 10){
                                $selectType = 'สถาบันภาษากองทัพไทย (เขตดุสิต)';
                            }
                        ?>

                        <input type="text" class="form-control" value="<?php echo $selectType; ?>" readonly>

                        <hr class="my-4">

                        <div class="row g-3 pt-2">

                            <div class="col-sm-12">
                                <label class="form-label">หนังสือขอความอนุเคราะห์ฝึกงาน</label> <a href="<?php echo $result['FileName']; ?>" download>Download link</a>
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-12">
                                <label class="form-label">รูปถ่ายหน้าตรง</label>
                                <div>
                                    <img src="<?php echo $result['PicName']; ?>" style="max-height: 500px;"/>
                                </div>
                                
                            </div>

                        </div>

                        <hr class="my-4">

                        <div class="text-center">
                            <button id='btnApprove' class='btn btn-sm btn-success btn-block' value='<?php echo $id; ?>'>พิจารณาให้ผ่าน</button>
                            <button id='btnReject' class='btn btn-sm btn-danger btn-block' value='<?php echo $id; ?>'>พิจารณาให้ไม่ผ่าน</button>
                            <a href="/register/applicant.php" class="btn btn-sm btn-primary btn-block">Back</a>
                        </div>

                    </form>

                </div>
            </div>

        </main>

        <footer class="my-5 pt-5 text-body-secondary text-center text-small">
            <p class="mb-1">จัดทำโดย กองเทคโนโลยีดิจิทัล <br>
        กองบัญชาการสถาบันวิชาการป้องกันประเทศ<br>
        กองบัญชาการกองทัพไทย <br>
        © มกราคม ๒๕๖๙</p>
        </footer>

    </div>

    <script>
        $(document).ready(function(){

            $('#btnApprove').click(function(){ 
                var val = $(this).val(); 
                var ajaxurl = 'common/approve.php', 
                data =  {'action': 'approve',
                    'id': val
                }; 
                $.post(ajaxurl, data, function (response) { 
                    // Response div goes here. 
                    alert("Approve successfully");
                    window.location.href = "/register/applicant.php";
                });
            }); 

            $('#btnReject').click(function(){ 
                var val = $(this).val(); 
                var ajaxurl = 'common/approve.php', 
                data =  {'action': 'reject',
                    'id': val
                }; 
                $.post(ajaxurl, data, function (response) { 
                    // Response div goes here. 
                    alert("Reject successfully"); 
                    window.location.href = "/register/applicant.php";
                }); 
            });
        
        }); 
    </script>


    </body>

    

</html>