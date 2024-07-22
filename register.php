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

    <script>
        $( function() {

            $( "#birthDate" ).datepicker({ dateFormat: 'dd/mm/yy' })
                .on('change', function(e) {
                    
            });
            $( "#startDate" ).datepicker({ dateFormat: 'dd/mm/yy' });
            $( "#endDate" ).datepicker({ dateFormat: 'dd/mm/yy' });
        } );
    </script>

  </head>
  <body class="bg-body-tertiary">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img src="assets/img/20201008132355.png" class="d-block mx-auto mb-4" src="" alt="" height="150px">
                <h2>ระบบรับลงทะเบียนนักศึกษาฝึกงาน</h2>
                <a href="/register/index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                <a href="/register/checkresult.php" class="p-2"><i class="fa fa-search" aria-hidden="true"></i> ตรวจสอบสถานะลงทะเบียน</a>
                <a href="/register/login.php" class="p-2"><i class="fa fa-sign-in" aria-hidden="true"></i> เข้าสู่ระบบ</a>
            </div>

            <hr class="my-4">

            <div class="row g-5">
                <div class="col-md-12 col-lg-12">

                    <h4 class="mb-3">กรุณากรอกลายเอียดให้ครบถ้วน</h4>

                    <form id="regForm" class="needs-validation" action="upload.php" method="post" enctype="multipart/form-data" novalidate>

                        <div class="row g-3">

                            <div class="col-sm-2">
                                <label for="titleName" class="form-label">คำนำหน้า</label>
                                <input type="text" class="form-control" id="titleName" name="titleName" required="">
                            </div>

                            <div class="col-sm-4">
                                <label for="firstName" class="form-label">ชื่อ</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required="">
                            </div>

                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">นามสกุล</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required="">
                            </div>

                            <div class="col-sm-2">
                                <label for="nickName" class="form-label">ชื่อเล่น</label>
                                <input type="text" class="form-control" id="nickName" name="nickName" placeholder="" value="" required="">
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-3">
                                <label for="birthDate" class="form-label">วัน/เดือน/ปี เกิด</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="birthDate" name="birthDate" placeholder="" value="" required="">
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="height: 100%;"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <label for="age" class="form-label">อายุ (ปี)</label>
                                <input type="number" class="form-control" id="age" name="age" placeholder="" value="" required="">
                            </div>

                            <div class="col-sm-4">
                                <label for="congenitalDisease" class="form-label">โรคประจำตัว</label>
                                <input type="text" class="form-control" id="congenitalDisease" name="congenitalDisease" placeholder="" value="">
                            </div>

                            <div class="col-sm-3">
                                <label for="tel" class="form-label">เบอร์โทร</label>
                                <input type="text" class="form-control" id="tel" name="tel" placeholder="" value="" required="">
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-4">
                                <label for="idNo" class="form-label">เลขที่บัตรประชาชน</label>
                                <input type="text" class="form-control" id="idNo" name="idNo" placeholder="" value="" required="">
                            </div>

                            <div class="col-sm-8">
                                <label for="address" class="form-label">ที่อยู่</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="" value="" required="">
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-8">
                                <label for="email" class="form-label">Email (Optional)</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="" value="">
                            </div>

                            <div class="col-sm-4">
                                <label for="idLine" class="form-label">ID Line</label>
                                <input type="text" class="form-control" id="idLine" name="idLine" placeholder="" value="">
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-8">
                                <label for="university" class="form-label">สถานศึกษา</label>
                                <input type="text" class="form-control" id="university" name="university" placeholder="" value="" required="">
                            </div>

                            <div class="col-sm-2">
                                <label for="major" class="form-label">สาขา</label>
                                <input type="text" class="form-control" id="major" name="major" placeholder="" value="" required="">
                            </div>

                            <div class="col-sm-2">
                                <label for="year" class="form-label">ชั้นปี</label>
                                <input type="number" class="form-control" id="year" name="year" placeholder="" value="" required="">
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-2">
                                <label for="grade" class="form-label">เกรดเฉลี่ยสะสม</label>
                                <input type="text" class="form-control" id="grade" name="grade" placeholder="" value="" required="">
                            </div>

                            <div class="col-sm-5">
                                <label for="startDate" class="form-label">เริ่มฝึกงาน วัน/เดือน/ปี</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="startDate" name="startDate" placeholder="" value="" required="">
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="height: 100%;"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-5">
                                <label for="endDate" class="form-label">สิ้นสุดฝึกงาน วัน/เดือน/ปี</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="endDate" name="endDate" placeholder="" value="" required="">
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="height: 100%;"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-12">
                                <label for="talent" class="form-label">ทักษะความสามารถพิเศษ</label>
                                <textarea  class="form-control" id="talent" rows="3" name="talent" placeholder="" value=""></textarea>
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-8">
                                <label for="parent" class="form-label">ชื่อผู้ปกครองที่สามารถติดต่อได้กรณีฉุกเฺฉิน</label>
                                <input type="text" class="form-control" id="parent" name="parent" placeholder="" value="" required="">
                            </div>

                            <div class="col-sm-4">
                                <label for="parentTel" class="form-label">เบอร์โทร</label>
                                <input type="text" class="form-control" id="parentTel" name="parentTel" placeholder="" value="" required="">
                            </div>

                        </div>

                        <hr class="my-4">

                        <label class="form-label">ข้าพเจ้ามีความประสงค์ฝึกงานในหน่วยงาน สังกัด สถาบันวิชาการป้องกันประเทศ (เลือกได้เพียง 1)</label>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input id="selectType1" name="selectType" value="1" type="radio" class="form-check-input" required="">
                                    <label class="form-check-label" for="selectType1">กองบัญชาการ</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input id="selectType2" name="selectType" value="2" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="selectType2">อนุสรณ์สถานแห่งชาติ(จ.ปทุมธานี)</label>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-2">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input id="selectType3" name="selectType" value="3" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="selectType3">วิทยาลัยป้องกันราชอาณาจักร</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input id="selectType4" name="selectType" value="4" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="selectType4">วิทยาลัยเสนาธิการทหาร</label>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-2">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input id="selectType5" name="selectType" value="5" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="selectType5">สถาบันจิตวิทยาความมั่นคง</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input id="selectType6" name="selectType" value="6" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="selectType6">ศูนย์ฝึกยุทธศาสตร์</label>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-2">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input id="selectType7" name="selectType" value="7" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="selectType7">โรงเรียนเตรียมทหาร (จ.นครนายก)</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input id="selectType8" name="selectType" value="8" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="selectType8">โรงเรียนช่างฝีมือทหาร (เขตจตุจักร)</label>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-2">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input id="selectType9" name="selectType" value="9" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="selectType9">สำนักการศึกษาทหาร</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input id="selectType10" name="selectType" value="10" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="selectType10">สถาบันภาษากองทัพไทย (เขตดุสิต)</label>
                                </div>
                            </div>
                        </div>

                       

                        <hr class="my-4">

                        <label class="form-label">แนบไฟล์หนังสือขอความอนุเคราะห์ฝึกงานจากสถาบันการศึกษาต้นสังกัด และรูปถ่ายหน้าตรง (ชุดนักเรียน/นักศึกษา) 1 รูป</label>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-12">
                                <label class="form-label">หนังสือขอความอนุเคราะห์ฝึกงาน</label>
                                <input type="file" class="form-control" id="fileToUpload1" name="fileToUpload1" required="">
                            </div>

                        </div>

                        <div class="row g-3 pt-2">

                            <div class="col-sm-12">
                                <label class="form-label">รูปถ่ายหน้าตรง</label>
                                <input type="file" class="form-control" id="fileToUpload2" name="fileToUpload2" required="">
                            </div>

                        </div>

                        <hr class="my-4">

                        <label class="form-label text-danger">* กรุณาตรวจสอบข้อมูลก่อนบันทึก</label>

                        <button class="w-100 btn btn-primary btn-lg" type="submit">บันทึก</button>

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

    </body>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'
 
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')
 
            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>

</html>