<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <div align="center">
  <h2>ITI SHOP</h2>
  <h3>SIGN IN</h3>
  <form action="check_login.php" method="post">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">username</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="username" value="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password">
    </div>
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
<button type="reset" class="btn btn-secondary btn-lg btn-block">Reset</button>
</form>
  </div>
</div>
</body>
</html>