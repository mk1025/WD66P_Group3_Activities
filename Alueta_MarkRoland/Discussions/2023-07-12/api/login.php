<?php

include "./config.php";



if (isset($_POST['auth'])) {
    $loginRequest = json_decode($_POST['auth']);

    $response = array();

    $sql = "SELECT * FROM " . TBL_USERS . " WHERE username = '" . $loginRequest->username . "' ";

    $results = $connection->query($sql);

    $users = array();

    while ($row = $results->fetch_assoc()) {
        array_push($users, $row);
    }


    $response = createResponse(401, "Error", "Account doesn't exist");

    foreach ($users as $user) {

        if ($user['password'] == $loginRequest->password) {

            $response = createResponse(200, "Successful", "Successful");
        } else {

            $response = createResponse(401, "Error", "Wrong username or password");
        }
    }

    print_r($users);

    echo json_encode($response);
}