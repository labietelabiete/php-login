<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
  <main class="container">
    <div class="row">
      <div class="col col-6">
      </div>
      <div class="col col-6 h-100">
        <h2>Login</h2>
        <form action="./validate.php" method="POST">
          <div class="col col-12">
            <label for="emailInput">User email</label>
            <br>
            <input type="email" name="email" id="emailInput" placeholder="name@example.com" class="form-control">
          </div>
          <div class="col col-12">
            <label for="passwordEmail">User password</label>
            <br>
            <input type="password" name="password" id="passwordInput" class="form-control">
          </div>
          <div class="col col-12">
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
          </div>

        </form>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>