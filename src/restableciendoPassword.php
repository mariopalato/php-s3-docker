<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
 	include 'navbar.php';
    include 'clienteCognito.php';
	require_once('vendor/autoload.php');
	use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;

	if ($_POST) {
		$username = $_POST['userName'];
		$result = $client->forgotPassword([
		    'ClientId' => 'k97j4lmfugsfkjo9f5p0dgs2o', // REQUIRED
		    'Username' => $username, // REQUIRED
		]);
		//var_dump($result);
		$contact = $result->get("CodeDeliveryDetails") ["Destination"];

	}

?>
<br>
<div class="card" style="width: 600px; margin: 0 auto;">

	<?php 
		setcookie("username", $username);
		echo"<h5 style='text-align: center;' class='card-title'>Se ha enviado un código de verificación a ".$contact."</h5>";
	?>

	<form method = "post" action="validandoPasswordNuevo.php">
		<div class="card-body">
		<br>
		<div class="mb-1 mt-1">
            <label for="codigoVerificacion" class="form-label">Ingresa el código de verificación:</label>
            <input type="text" class="form-control" name="codigoVerificacion" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Ingresa tu nueva contraseña:</label>
            <input type="password" class="form-control" placeholder="Ingresa tu contraseña" name="password" required>
          </div>
   		<div style="text-align: center;">
   			<button type ="submit" class="btn btn-primary">Cambiar Contraseña</button>
   		</div>
		</div>
	</form>
</div>
<?php 	include 'footer.php';?>
</body>
</html>