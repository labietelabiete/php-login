<?php
session_start();
if (isset($_GET["logout"])) {
  $_SESSION["alertMessage"] = "Correct logout";
}
?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.scss">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/ecea200bd3.js" crossorigin="anonymous"></script>
</head>

<body>
  <main class="container main">
    <div class="row">
      <div class="col col-6 left-wrapper text-center align-center">
        <img src="./assets/img/logo-white-01.png" class="img-responsive align-center w-60">
      </div>
      <div class="col col-6 right-wrapper form-col text-center h-100">
        <form class="form-login" action="./validate.php" method="POST">
          <div class="col col-12 pt-4">
            <i class="fas fa-users"></i>
          </div>
          <div class="col col-12 pt-3">
            <h2>WELCOME PHP LOGIN</h2>
          </div>
          <div class="col col-12 pt-3">
            <label class="pb-1" for="emailInput"><i class="fas fa-user"></i> User email</label>
            <br>
            <input type="email" name="email" id="emailInput" placeholder="name@example.com" class="form-control login-input w-95 d-inline">
          </div>
          <div class="col col-12 pt-3">
            <label class="pb-1" for="passwordEmail"><i class="fas fa-lock"></i> User password</label>
            <br>
            <input type="password" name="password" id="passwordInput" class="form-control login-input w-95 d-inline">
          </div>
          <?php
          if (isset($_SESSION["alertMessage"])) {
            echo '<div class="col col-12 pt-4 text-center">';
            echo '<p class="alert-msg">';
            echo $_SESSION["alertMessage"];
            echo '</p>';
            echo '</div>';
          }
          ?>
          <div class="col col-12 pt-4">
            <button class="w-95 btn btn-lg btn-primary btn-login" type="submit">Sign In</button>
          </div>

        </form>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>