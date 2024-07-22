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

  </head>
  <body class="bg-body-tertiary">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img src="assets/img/20201008132355.png" class="d-block mx-auto mb-4" src="" alt="" height="150px">
                <h2>ตรวจสอบผลการสมัคร</h2>
                <a href="/register/index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                <a href="/register/register.php" class="p-2"><i class="fa fa-pencil" aria-hidden="true"></i> ลงทะเบียน</a>
            </div>

            <hr class="my-4">

            

            <form class="row needs-validation text-center" action="checkresult_view.php"  method="post" enctype="multipart/form-data" novalidate>

                <div class="col-auto">
                    <input type="text" readonly class="form-control-plaintext" value="เลขที่บัตรประชาชน">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="idNo" name="idNo" required="">
                </div>
                <div class="col-auto">
                    <button type="submit" name="button1" class="btn btn-primary mb-3">ตรวจสอบ</button>
                </div>

            </form>

        </main>

        <footer class="my-5 pt-5 text-body-secondary text-center text-small">
            <p class="mb-1">จัดทำโดย กองเทคโนโลยีดิจิทัล <br>
        กองบัญชาการสถาบันวิชาการป้องกันประเทศ<br>
        กองบัญชาการกองทัพไทย <br>
        © มกราคม ๒๕๖๙</p>
        </footer>

    </div>

    </body>

</html>