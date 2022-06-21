<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Hello, world!</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <form action="comparar.php" method="post">
          <h1 class="text-center">Login</h1>
          <div class="card">
              <div class="card">
                <small id="emailHelp" class="form-text text-muted">Ingrese nombre de usuario</small>
                <input type="text" name="usuario" id="txtUser" Required>
                <small id="emailHelp" class="form-text text-muted">Ingrese Contraseña</small>
                <input type="password" name="passwd" id="txtPasswd" Required>
              
                <button type="submit" class="btn btn-primary" id="btnIngresar">Submit</button>
              </div>
          </div>
        </form>
      </div>
      <div class="col-3"></div>
    </div>
  </div>
</body>
</html>