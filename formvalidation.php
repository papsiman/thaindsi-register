<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo v5.3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
 
<body>
    <div class="container mt-5">
        <h4>Bootstap5 Form Validation</h4>
        <hr>  <br> 
        <form method="post" action="https://devbanban.com/?p=4425" class="row g-3 needs-validation" novalidate>
            <div class="row">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">ชื่อ</label>
                    <input type="text" class="form-control" id="validationCustom01" required minlength="3" placeholder="ชื่อ">
                    <div class="invalid-feedback">
                        ห้ามว่าง และขั้นต่ำ 3 ตัวอักษร
                    </div>
                </div>
            </div>
 
            <div class="row">
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">นามสกุล</label>
                    <input type="text" class="form-control" id="validationCustom02" required minlength="3" placeholder="นามสกุล">
                    <div class="invalid-feedback">
                        ห้ามว่าง และขั้นต่ำ 3 ตัวอักษร
                    </div>
                </div>
            </div>
 
            <div class="row">
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">เบอร์โทร 10 หลัก</label>
                    <input type="text" class="form-control" id="validationCustom03" required minlength="10" maxlength="10"
                        placeholder="เบอร์โทร" pattern="[0-9]*">
                    <div class="invalid-feedback">
                        กรอกเบอร์โทร 10 หลัก
                    </div>
                </div>
            </div>
 
            <div class="row">
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Email</label>
                    <input type="email" class="form-control" id="validationCustom04" required  placeholder="Email">
                    <div class="invalid-feedback">
                        ห้ามว่าง และกรอกรูปแบบอีเมลให้ถูกต้อง 
                    </div>
                </div>
            </div>
 
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
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
</body>
 
</html>
 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>