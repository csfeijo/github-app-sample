<?php
function getUserRepositories($userToken) {
    $url = "https://api.github.com/installation/repositories";
   
    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        'Accept: application/json',
        'X-GitHub-Api-Version: 2022-11-28',
        "Authorization: Bearer ".$userToken,
        'Content-Length: '.strlen($data)
    );

    curl_setopt($curl, CURLOPT_USERAGENT, 'php');
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //curl_setopt($curl, CURLOPT_POST, 1); // Specify the request method as POST
    //curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Set the posted fields
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_VERBOSE, true);

    $resp = curl_exec($curl);


    curl_close($curl);

    return $resp;
}
?>