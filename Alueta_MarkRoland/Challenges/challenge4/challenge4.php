<?php 



function login($name, $username, $password){

    if($username === "admin" && $password === "password123"){

        echo "Succesfully Login! \n\n";

        echo "Hello " . greet($name) . "\n\n";

    }else{
        echo "Invalid Username & Password";
    }

}

function greet($name){

    if($name !== ucwords($name)){
        return ucwords($name);
    } 

    return $name;

}

login("Bob", "admin", "password123");
login("juan", "admin", "password123");

?>