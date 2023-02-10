<?php
include('generate-jwt.php');

$installationID = '34039401';

if($_SERVER['HTTP_HOST'] == 'localhost:8888') {
  $url = 'http://localhost:8888/github-app-sample/y.php';
} else {
  $url = 'https://www.professorfeijo.com.br/github-app-sample/y.php';
}

$url = "https://api.github.com/app/installations/$installationID/access_tokens";

$jwtToken = getJWTToken();
$curl = curl_init($url);
$h = array();

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    'Accept: application/json',
    'X-GitHub-Api-Version: 2022-11-28',
    "Authorization: Bearer ".$jwtToken,
    'Content-Length: '.strlen($data)
);

curl_setopt($curl, CURLOPT_USERAGENT, 'php');
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POST, 1); // Specify the request method as POST
curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Set the posted fields
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_VERBOSE, true);

$resp = curl_exec($curl);


curl_close($curl);

echo $resp;
exit;









$header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);



$header = substr($response, 0, $header_size);
$body = substr($response, $header_size);

echo $body;
?>