<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <?php include 'navbar.php';?>
  <br>
  <div class="card" style="width: 500px; margin: 0 auto;">
    <h3 style="text-align: center;" class="card-title">Olvidaste tu contraseña</h3>
    <form method = "post" action="restableciendoPassword.php">
      <div class="card-body">
        <div class="mb-1 mt-1">
            <label for="userName" class="form-label">Ingresa tu nombre de usuario:</label>
            <input type="text" class="form-control" name="userName" required>
        </div>
        <div class="mb-3 mt-3" style="text-align: center;">
          <button type ="submit" class="btn btn-primary">Restablecer contraseña</button>
        </div>
    </div>
    </form>
  </div>
  <?php include 'footer.php'?>
</body>
</html>