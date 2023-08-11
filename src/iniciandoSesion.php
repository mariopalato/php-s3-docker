<?php

    include 'navbar.php';
    include 'clienteCognito.php';
	require_once('vendor/autoload.php');
	use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;
    
    if ($_POST) {
    	$username = $_POST["userName"];
    	$password = $_POST["password"];
        try{
        	$result = $client->initiateAuth([
        		'AuthFlow' =>'USER_PASSWORD_AUTH',
        		'ClientId' => 'k97j4lmfugsfkjo9f5p0dgs2o',
        	 	//'UserPoolId' =>'us-east-1_pHiEjcK1L',
        	 	'AuthParameters' =>[
        	 		'USERNAME' => $username,
        	 		'PASSWORD' => $password,
        	 	]
        	]);	
            $validacionCode = $result-> get("@metadata") ["statusCode"];

            if ($validacionCode == 200) {
                $token = $result->get('AuthenticationResult')['AccessToken'];
                setcookie("token", $token);
                echo "<script>window.location.replace('verUsuario.php')</script>";
            }
            
        }catch(Exception $e){            
            //echo $e->getMessage();
            $excepcion = explode(" ", $e);            
            $error = $excepcion[26];
            if ($error == "NotAuthorizedException") {
                echo "<div class='container pt-5'>";
                echo "<h1>Nombre de usuario o contraseña incorrecta</h1>";
                echo "</div>";
            }elseif ($error == "UserNotConfirmedException") {
                echo "<div class='container pt-5'>";
                echo "<h1>Usuario no confirmado</h1>";
                echo "</div>";
            }
            include 'footer.php';
        }
    }
?>
