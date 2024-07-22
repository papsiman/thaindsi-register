<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}


    </style>

  <?php
    session_start();
    if(isset($_SESSION["Alive"])){
      if($_SESSION["Alive"] == "Alive"){
        header("Location: applicant.php");
      }
    }
    
  ?>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  <script src="chrome-extension://hmdmhilocobgohohpdpolmibjklfgkbi/pageScript.js"></script></head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="validateLogin.php" method="post" enctype="multipart/form-data">
    <img src="assets/img/20201008132355.png" class="d-block mx-auto mb-4" src="" alt="" height="150px">

    <div class="form-floating">
      <input name="username" type="text" class="form-control" placeholder="Username">
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" placeholder="Password">
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">จัดทำโดย กองเทคโนโลยีดิจิทัล <br>
        กองบัญชาการสถาบันวิชาการป้องกันประเทศ<br>
        กองบัญชาการกองทัพไทย <br>
        © มกราคม ๒๕๖๙</p>
  </form>

</main>


    
  

</body></html>