<?php
include 'navbar.php';
require_once('vendor/autoload.php');
use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;
include 'clienteCognito.php';
    if ($_POST) {
    	$codigoValidacion = $_POST["codigoVerificacion"];
    	$username = $_POST["username"];

    	try{
			
			$result = $client->confirmSignUp([
				'ClientId' => 'k97j4lmfugsfkjo9f5p0dgs2o',
				'ConfirmationCode' => $codigoValidacion,
				'Username' => $username,

			]);

			$aux = $result-> get("@metadata") ["statusCode"];

			if ($aux == 200) {
				echo "<div class='container'>";
				echo "<h3>El usuario se a creado y verificado con exito</h3>";
				echo "</div>";
			}
		}catch(Exception $e){
			$excepcion = explode(" ", $e->getMessage());            
			$error = $excepcion[25];
            //$error = $excepcion[26];
            if ($error == "CodeMismatchException") {
                echo "<div class='container pt-5'>";
                echo "<h1>Codigo invalido</h1>";
                echo "</div>";
            }
		}
    }
?>