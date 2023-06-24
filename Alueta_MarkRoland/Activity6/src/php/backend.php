<?php

if(isset($_POST)){
    $password = $_POST['register_password'];
    $confirm_password = $_POST['register_confirm_password'];

    if($password == $confirm_password){

        $first_name = ucwords($_POST['register_first_name']);
        $last_name = ucwords($_POST['register_last_name']);

        echo "Hi $first_name $last_name <br>";

        echo "Welcome to My System <br>";

        $birthday = $_POST['register_birthday'];

        echo "Your birthday is $birthday <br>";

        $address = $_POST['register_address'];

        echo "You are currently residing at $address <br>";

        $email =  strtolower($_POST['register_email']);

        echo "Your email address is $email <br>";

        $subscribe = isset($_POST['register_subscribe']);

        if($subscribe) {
            echo "Thank you for subscribing to our newsletter <br>";
        }

        echo "<br><br> Thank you for registering";
        

    } else {
        echo "You cannot proceed to your account because your passwords do not match";
    }
}