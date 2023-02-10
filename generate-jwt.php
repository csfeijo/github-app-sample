<?php
function getJWTToken () {
    $pem = null;
    $appId = null;

    // Get PEM file path
    // if ($argc > 1) {
    //     $pem = $argv[1];
    // } else {
    //     echo "Enter path of private PEM file: ";
    //     $pem = fgets(STDIN);
    // }

    // Get the App ID
    // if ($argc > 2) {
    //     $appId = $argv[2];
    // } else {
    //     echo "Enter your APP ID: ";
    //     $appId = fgets(STDIN);
    // }

    $pem = 'private-key.pem';
    $appId = "291264";

    // Open PEM
    $pemContent = file_get_contents('private-key.pem');

    $payload = [
        // Issued at time
        'iat' => time(),
        // JWT expiration time (10 minutes maximum)
        'exp' => time() + 600,
        // GitHub App's identifier
        'iss' => $appId
    ];

    // Create JWT
    $header = [
        'alg' => 'RS256',
        'typ' => 'JWT'
    ];

    $header = json_encode($header);
    $header = base64_encode($header);
    $payload = json_encode($payload);
    $payload = base64_encode($payload);

    $signature = '';
    openssl_sign("$header.$payload", $signature, $pemContent, 'sha256WithRSAEncryption');
    $signature = base64_encode($signature);

    $jwt = "$header.$payload.$signature";

    return $jwt;
}
?>