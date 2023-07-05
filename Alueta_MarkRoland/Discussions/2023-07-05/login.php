<?php 


$defaultUsername = "admin";
$defaultPassword = "password123";
/*

5.1 isset the variable from your AJAX
The process is authentication or login

*/


if(isset($_POST['auth'])) {
    // 5.2 do json decode
    $loginRequest = json_decode($_POST['auth']);
    
    /*
        5.3 Create a response variable
    */

    $response = array();


    /*
        5.4 Do the desired process
    */
    if($defaultUsername === $loginRequest->email) {
        $response = createResponse(200, "Successfully Login", "Successful");
    } else {
        $response = createResponse(401, "Wrong username password", "Error");
    }

    echo json_encode($response);
}

function createResponse($status, $description, $title) {
    $response['status'] = $status;
    $response['description'] = $description;
    $response['title'] = $title;
    return $response;
}