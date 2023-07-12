<?php

echo "I am now on test.php";

const DEFAULT_USERNAME = "admin"; // const is a keyword that is used to declare constants
const DEFAULT_PASSWORD = "password"; // since the variable isn't going to change, I declared them as constants instead.

$username = $_POST['username'] ?? null; // ?? null means if username is null then set it to null
$password = $_POST['password'] ?? null;
$myName = $_POST['myName'] ?? null;

login($username, $password, $myName);

function login ($username, $password, $name) {
    if ($username === DEFAULT_USERNAME && $password === DEFAULT_PASSWORD) {
        echo "Sucessfully Logged In <br>";
        echo "Welcome, $name";
    } else {
        echo "Account does not exist";
    }
}


