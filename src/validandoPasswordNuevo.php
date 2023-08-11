<?php 
include 'navbar.php';
include 'clienteCognito.php';
require_once('vendor/autoload.php');
use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;

if ($_POST) {
	$codigoValidacion = $_POST['codigoVerificacion'];
	$password = $_POST['password'];
	if ($_COOKIE) {
		$username = $_COOKIE['username'];
		setcookie("username",0,time() - 60);
		$result = $client->confirmForgotPassword([
	    'ClientId' => 'k97j4lmfugsfkjo9f5p0dgs2o', // REQUIRED
	    'ConfirmationCode' => $codigoValidacion, // REQUIRED
	    'Password' => $password, // REQUIRED
	    'Username' => $username, // REQUIRED
		]);
		$aux = $result-> get("@metadata") ["statusCode"];

		if ($aux == 200) {
			echo "<div class='container'>";
			echo "<h3>Se ha cambiado la contraseña con exito</h3>";
			echo "</div>";
		}
	}

}
include 'footer.php';
?>