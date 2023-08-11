<?php
    require_once('vendor/autoload.php');
	use Aws\SecretsManager\SecretsManagerClient;
	$region = 'us-east-1'; //REGION
    $version = 'latest';
    $client = new SecretsManagerClient([
        'version' => $version,
        'region' => $region,
        'credentials' => [
                //CREDENTIALS
                'key'    => 'AKIA2ZMXNYJPDXLPHTHI',
                'secret' => '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',
            ],
    ]);

    try {
        $result = $client->getSecretValue([
            'SecretId' => 'arn:aws:secretsmanager:us-east-1:741736301150:secret:Secreto-Demo-l5ei1O',
        ]);
        echo($result);

    } catch (AwsException $e) {
        $error = $e->getAwsErrorCode();
        if ($error == 'DecryptionFailureException') {
            // Secrets Manager can't decrypt the protected secret text using the provided AWS KMS key.
            // Handle the exception here, and/or rethrow as needed.
            throw $e;
        }
        if ($error == 'InternalServiceErrorException') {
            // An error occurred on the server side.
            // Handle the exception here, and/or rethrow as needed.
            throw $e;
        }
        if ($error == 'InvalidParameterException') {
            // You provided an invalid value for a parameter.
            // Handle the exception here, and/or rethrow as needed.
            throw $e;
        }
        if ($error == 'InvalidRequestException') {
            // You provided a parameter value that is not valid for the current state of the resource.
            // Handle the exception here, and/or rethrow as needed.
            throw $e;
        }
        if ($error == 'ResourceNotFoundException') {
            // We can't find the resource that you asked for.
            // Handle the exception here, and/or rethrow as needed.
            throw $e;
        }
    }

    
?>