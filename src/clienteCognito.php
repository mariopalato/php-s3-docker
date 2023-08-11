<?php
	require_once('vendor/autoload.php');
	use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;
	$region = 'us-east-1'; //REGION
    $version = 'latest';
    $client = new CognitoIdentityProviderClient([
        'version' => $version,
        'region' => $region,
        'credentials' => [
                //CREDENTIALS
                'key'    => 'AKIA2ZMXNYJPDXLPHTHI',
                'secret' => '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',
            ],
    ]);
?>