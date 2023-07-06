<?php 

include "../functions.php";


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
        $_SESSION["logged-in-user"] = array(
            "firstname" => "Mark",
            "lastname" => "Alueta",
            "email" => "email",
            "contacts" => "0987654321",
            "occupation" => "Web Developer"
        );
    } else {
        $response = createResponse(401, "Wrong username password", "Error");
    }

    echo json_encode($response);
}

if (isset($_POST['getLoggedUser'])) {
    $response = createResponse(200, "Successfully Login", $_SESSION["logged-in-user"]);
    echo json_encode($response);
}

