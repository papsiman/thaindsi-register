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

  </head>
  <body class="bg-body-tertiary">

    <?php

        require_once "config.php";

        session_start();

        if(isset($_SESSION["Alive"])){
            if($_SESSION["Alive"] != "Alive"){
                header("Location: login.php");
            }
        }
        
        $sql = "SELECT * FROM applicants";
        $result = $conn->query($sql);

    ?>

    <div class="container">
        <main>
            <div class="py-5 text-center">
            <img src="assets/img/20201008132355.png" class="d-block mx-auto mb-4" src="" alt="" height="150px">
                <h2>รายชื่อผู้สมัคร</h2>
                <a href="/register/index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                <a href="/register/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
            </div>

            <hr class="my-4">

            <table id="tbl" class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col" style="width: 50px;">#</th>
                    <th scope="col" style="width: 350px;">Action</th>
                    <th scope="col" style="max-width: 30%;">เลขที่บัตรประชาชน</th>
                    <th scope="col" style="max-width: 25%;">ชื่อ</th>
                    <th scope="col" style="max-width: 25%;">นามสกุล</th>
                    <th scope="col">Result</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        if ($result->num_rows > 0) {
                            // output data of each row
                            $rowIdx = 0;
                            while($row = $result->fetch_assoc()) {

                                ++$rowIdx;

                                $regResultMsg = "";
                                $approveButton = "";
                                $rejectButton = "";
                                $acceptButton = "";
                                if($row['RegisterResult'] == "1"){
                                    //ผ่านการพิจารณา
                                    $rejectButton = "<a href='common/reject.php?id=".$row['Id']."' class='btn btn-sm btn-danger'>พิจารณาให้ไม่ผ่าน</a>";
                                    
                                    $regResultMsg = "<span class='badge text-bg-success'>ผ่าน</span>";
                                    $acceptButton = "<a href='pdf.php?id=".$row['Id']."' target='_blank' class='btn btn-sm btn-primary'><i class='fa fa-file-pdf-o' aria-hidden='true'></i> ใบตอบรับ</a>";
                                }
                                else if($row['RegisterResult'] == "0"){
                                    //ไม่ผ่านการพิจารณา
                                    $regResultMsg = "<span class='badge text-bg-danger'>ไม่ผ่าน</span>";
                                    $approveButton = "<a href='common/approve.php?id=".$row['Id']."&selectType=".$row['SelectType']."&name=".$row['TitleName'].' '.$row['FirstName'].' '.$row['LastName']."' class='btn btn-sm btn-success'>พิจารณาให้ผ่าน</a>";
                                }
                                else{
                                    //ยังไม่ได้พิจารณา
                                    $approveButton = "<a href='common/approve.php?id=".$row['Id']."&selectType=".$row['SelectType']."&name=".$row['TitleName'].' '.$row['FirstName'].' '.$row['LastName']."' class='btn btn-sm btn-success'>พิจารณาให้ผ่าน</a>";
                                    $rejectButton = "<a href='common/reject.php?id=".$row['Id']."' class='btn btn-sm btn-danger'>พิจารณาให้ไม่ผ่าน</a>";
                                }
                                
                                //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                                echo "<tr>
                                        <th scope='row'>$rowIdx</th>
                                        <td>
                                            <a href='register_view.php?id=".$row['Id']."' class='btn btn-sm btn-warning'><i class='fa fa-search' aria-hidden='true'></i> ดู</a>
                                            $approveButton
                                            $rejectButton
                                            $acceptButton
                                        </td>
                                        <td>".$row['IdNo']."</td>
                                        <td>".$row['FirstName']."</td>
                                        <td>".$row['LastName']."</td>
                                        <td>
                                            $regResultMsg
                                        </td>
                                    </tr>
                                ";
                            }
                        } 
                        else {
                            echo "<tr><th colspan='5' class='text-center'>ไม่พบข้อมูลผู้สมัคร</th></tr>";
                        }
                    ?>
                </tbody>
            </table>

        </main>

        <footer class="my-5 pt-5 text-body-secondary text-center text-small">
            <p class="mb-1">จัดทำโดย กองเทคโนโลยีดิจิทัล <br>
        กองบัญชาการสถาบันวิชาการป้องกันประเทศ<br>
        กองบัญชาการกองทัพไทย <br>
        © มกราคม ๒๕๖๙</p>
        </footer>

    </div>

    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>


</html>