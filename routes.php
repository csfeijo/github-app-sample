<?php
include('generate-jwt.php');
include('get-auth-token.php');
include('get-user-repositories.php');


if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch($action) {
        case 'get_jwt_token':
            $jwtToken = getJWTToken();
            $installationID = $_GET['installationID'];

            $token = getAuthToken($installationID, $jwtToken);
            echo getUserRepositories($token);
        break;
    }
}



?>