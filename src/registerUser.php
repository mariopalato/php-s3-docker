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
  <div class="card" style="width: 800px; margin: 0 auto;">
      <h3 style="text-align: center;" class="card-title">REGISTRO DE USUARIO</h3>
      <form method = "post" action="confirmarUsuario.php">
        <div class="card-body">
          <div class="mb-3 mt-3">
              <label for="userName" class="form-label">Nombre de usuario:</label>
              <input type="text" class="form-control" placeholder="Ingresa tu nombre de usuario" name="userName" required>
          </div>
          <div class="mb-3 mt-3">
              <label for="nombre" class="form-label">Nombre completo:</label>
              <input type="text" class="form-control" placeholder="Ingresa tu nombre completo" name="nombre" required>
          </div>
          <div class="mb-3 mt-3">
              <label for="direccion" class="form-label">Dirección:</label>
              <input type="text" class="form-control" placeholder="Guadalajara,Jalisco" name="direccion" required>
          </div>
          <div class="mb-3 mt-3">
              <label for="telefono" class="form-label">Telefono:</label>
              <input type="text" class="form-control" placeholder="3557891236" name="telefono" required>
          </div>
          <div class="mb-3 mt-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" placeholder="ejemplo@gmail.com" name="email" required>
          </div>           
          <div class="mb-3">
              <label for="password" class="form-label">Password:</label>
              <input type="password" class="form-control" placeholder="*********" name="password" required>
          </div>
          <div style="text-align: center;"> 
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </div>
    </form> 
  </div>

  <?php include 'footer.php'?>
</body>
</html>