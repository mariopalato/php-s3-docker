<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <?php include 'navbar.php'?>
  <br>
  <div class="card" style="width: 500px; margin: 0 auto;">
      <h3 style="text-align: center;" class="card-title">INICIO DE SESION</h3>
      <form method = "post" action="iniciandoSesion.php">
          <div class="card-body">
          <div class="mb-3 mt-3">
            <label for="userName" class="form-label">Nombre de usuario:</label>
              <input type="text" class="form-control" placeholder="Ingresa un nombre de usuario" name="userName" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" placeholder="Ingresa tu contraseña" name="password" required>
          </div>
          <div class="mb-3">
            <a href="olvidastePassword.php">¿Olvidaste tu contraseña?</a>
          </div>
          <div style="text-align: center;">
            <button  type="submit" class="btn btn-primary">Login</button>
          </div>
          </div>
    </form> 
  </div>
  <?php include 'footer.php'?>
</body>
</html>