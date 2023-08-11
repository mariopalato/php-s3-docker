<?php
require_once('vendor/autoload.php');

use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>AWS COGNITO</title>

</head>
<body>
<br>
<div class="container">
<h3>LISTADO DE LOS USUARIOS</h3>
<br>

<?php 
$region = '<REGION_DEL_POOL>'; //REGION
$version = 'latest'; //VERSION DEL SDK

$client = new CognitoIdentityProviderClient([
    'version' => $version,
    'region' => $region,
    'credentials' => [
                    //CREDENTIALS
                    'key'    => '<ACCESS-KEY>',
                    'secret' => '<SECRET-KEY>',
                ],
]);


  
    $result = $client->listUsers([
        'AttributesToGet' => ['email','name','phone_number','address'], //FILTRO DE ATRIBUTOS A CONSULTAR
        'UserPoolId' => '<USER_POOL_ID_COGNITO>', 
    ]);
    
    $array = $result['Users'];
    $count = count($array);

    echo "<table class='table'>";
    echo "<thead>";
    echo "<th class='table-primary'>NOMBRE</th>";
    echo "<th class='table-primary'>TELEFONO</th>";
    echo "<th class='table-primary'>CORREO</th>";
    echo "<th class='table-primary'>ADDRESS</th>";
    echo "</thead>";
    for ($i=0; $i < $count; $i++) { 

        echo "<tr>";
        
        $address ="";
        $name="";
        $correo="";
        $telefono="";

        if (($array[$i] ['Attributes'] [0] ['Name']) == 'address') {
            $address = $array[$i] ['Attributes'] [0] ['Value'];
        }

        if(($array[$i] ['Attributes'] [1] ['Name']) == 'name'){
            $name = $array[$i] ['Attributes'] [1] ['Value'];
        }

        if (($array[$i] ['Attributes'] [2] ['Name']) == 'phone_number') {
            $telefono = $array[$i] ['Attributes'] [2] ['Value'];
        }
       
        if (($array[$i] ['Attributes'] [3] ['Name']) == 'email') {
            $correo = $array[$i] ['Attributes'] [3] ['Value'];
        }

        echo "<td>".$name."</td>";
        echo "<td>".$telefono."</td>";
        echo "<td>".$correo."</td>";
        echo "<td>".$address."</td>";
        
        echo "</tr>";   
    }
    echo "</table>";
    
?>
</div>

</body>
</html>