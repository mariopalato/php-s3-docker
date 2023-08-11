<?php 
include 'navbar.php';
include 'clienteCognito.php';
require_once('vendor/autoload.php');
use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;

	if (isset($_COOKIE['token'])) {
		$token = $_COOKIE['token'];
		
	    try{
		$result = $client->getUser([
		    'AccessToken' => $token, // REQUIRED
		]);

		$username = $result->get("Username");
		$direccion = $result->get("UserAttributes") [1]["Value"];
		$name  = $result->get("UserAttributes") [3]["Value"];
		$telefono  = $result->get("UserAttributes") [5]["Value"];
		$email  = $result->get("UserAttributes") [6]["Value"];


		//echo $direccion;
		echo "<br>";
		if(isset( $_COOKIE['mensaje']) ){
			$mensaje = $_COOKIE['mensaje'];
			echo "<div class='card' style='width: 800px; margin: 0 auto;'>";
			echo "<h3 style='text-align: center;'>".$mensaje."</h3>";
			echo "<div";
			setcookie("mensaje",0,time() - 60);
		}

		echo "<div class='card' style='width: 800px; margin: 0 auto;'>";
		echo "<h1 style='text-align: center;' class='card-title'><strong>Hola ".$name."</strong></h1>";
	
		echo "<form method = 'post' action='actualizandoUsuario.php'>";
		echo "<div class='card-body'>";
		echo "<div class='mb-3 mt-3'>";
		echo "<label for='userName' class='form-label'>Tu nombre de usuario es: </label>";
		echo "<input type='text' class='form-control' name='userName' value=".$username." readonly>";
		echo "</div>";

		echo "<div class='mb-3 mt-3'>";
		echo "<label for='nombre' class='form-label'>Tu nombre es: </label>";
		echo "<input type='text' class='form-control' name='nombre' value='".$name."'>";
		echo "</div>";	

		echo "<div class='mb-3 mt-3'>";
		echo "<label for='direccion' class='form-label'>Tu direccion es: </label>";
		echo "<input type='text' class='form-control' name='direccion' value='".$direccion."'>";
		echo "</div>";		

		echo "<div class='mb-3 mt-3'>";
		echo "<label for='email' class='form-label'>Tu email es: </label>";
		echo "<input type='text' class='form-control' name='email' value='".$email."'>";
		echo "</div>";	

		echo "<div class='mb-3 mt-3'>";
		echo "<label for='telefono' class='form-label'>Tu telefono es: </label>";
		echo "<input type='text' class='form-control' name='telefono' value='".$telefono."'>";
		echo "</div>";		

		echo "<div style='text-align: center;'>";
		echo "<button type='submit' class='btn btn-primary'>Actualizar</button>";
		echo "</div>";

		echo "</div>";

		echo "</form>";

		echo "</div>";
		}catch(Exception $e){
			$excepcion = explode(" ", $e->getMessage());            
			$error = $excepcion[22];
			//var_dump($excepcion);
			if ($error == "NotAuthorizedException") {
                echo "<div class='container pt-5'>";
                echo "<h1>La sesion a finalizado</h1>";
                setcookie("token",0,time() - 60);
                echo "</div>";
            }
		}

	}else{
		echo "<div class='container pt-5'>";
		echo "<h1>No ha iniciado sesion</h1>";
		echo "</div>";
	}
include 'footer.php';

?>

