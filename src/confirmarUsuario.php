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
	require_once('vendor/autoload.php');
 	include 'clienteCognito.php';
	use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;
	


		if ($_POST) {
			$username = $_POST["userName"];
			$nombre = $_POST["nombre"];
			$direccion = $_POST["direccion"];
			$telefono = $_POST["telefono"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			
			$telefono = "+52".$telefono;
			$result = $client->signUp([
				'ClientId' => 'k97j4lmfugsfkjo9f5p0dgs2o',
				'Password' => $password,
				'UserAttributes' => [
		        [
		            'Name' => 'name', // REQUIRED
		            'Value' => $nombre,
		        ],
		       	[
		            'Name' => 'address', // REQUIRED
		            'Value' => $direccion,
		        ],
		        [
		            'Name' => 'phone_number', // REQUIRED
		            'Value' => $telefono,
		        ],
		        [
		            'Name' => 'email', // REQUIRED
		            'Value' => $email,
		        ],
		        /*CUSTOM ATTRIBUTES
		        [
		            'Name' => 'custom:accesskey', // REQUIRED
		            'Value' => '123456799',
		        ],
		        [
		            'Name' => 'custom:secretkey', // REQUIRED
		            'Value' => '147852369',
		        ],*/

		    	],
		    	'Username' => $username, // REQUIRED
		    	
			]);
		}
	?>
	<br>
	<div class="container">
		<form method = "post" action="validandoUsuario.php">
			<h3>Se ha enviado un código de verificación a su correo</h3>
			<br>
			<?php echo "<input type='hidden' name='username' value= '".$username."'></input";?>
			
			<div class="container">
			<input type="text" name="codigoVerificacion" maxlength="6">
			<button type ="submit" class="btn btn-primary">Verificar</button>
			</div>
		</form>
	</div>
<?php include 'footer.php'?>
</body>
</html>