<?php

    include 'navbar.php';
    include 'clienteCognito.php';
	require_once('vendor/autoload.php');
	use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;

    if ($_POST) {
        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        if ($_COOKIE) {
            $token = $_COOKIE['token'];
            $result = $client->updateUserAttributes([
            'AccessToken' => $token, // REQUIRED
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
                ]
                ],
            ]);
            $mensaje = "Se han actualizado los datos";
            setcookie("mensaje", $mensaje);
            echo "<script>window.location.replace('verUsuario.php')</script>";
        
        }
    
    
    }

?>