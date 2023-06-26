<?php
$firstName = $_POST['inputFirstName'];
$lastName = $_POST['inputLastName'];
$birthDay = $_POST['inputBirthday'];
$address = $_POST['inputAddress'];
$city = $_POST['inputCity'];
$province = $_POST['inputProvince'];
$zipCode = $_POST['inputZipCode'];
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];
$confirmPassword = $_POST['confirmPassword'];
$subscribes = $_POST['inputSubscribe'];

registration(
    $firstName,
    $lastName,
    $birthDay,
    $address,
    $city,
    $province,
    $email,
    $password,
    $confirmPassword,
    $subscribes);

function registration(
    $firstName,
    $lastName,
    $birthDay,
    $address,
    $city,
    $province,
    $email,
    $password,
    $confirmPassword,
    $subscribes) {
    $email = strtolower($email);
    
    if ($password == $confirmPassword){
        echo firstnameAndLastname($firstName, $lastName);
        echo "<br>";
        echo "Welcome to My System";
        echo "<br>";
        echo birthDayFormat($birthDay);
        echo "<br>";
        echo myAddress($address, $city, $province);
        echo "<br>";
        echo "Your email is $email";
        echo "<br>";
        if ($subscribes == "1") {
            echo "Thanks for subscribing to our latest news";
        }
        echo "<br>";
        echo "<br>";
        echo "Thank you for registering";
    }
    else {
        echo "You cannot proceed to your account because your password does not match";
    }
    
}

function firstnameAndLastname($myFirstname, $myLastname) {
    $myFirstname = ucwords(strtolower($myFirstname));
    $myLastname = ucwords(strtolower($myLastname));
    return "Hi $myFirstname $myLastname \n";
}

function birthDayFormat($birthDay) {
    return date("Y-m-d", strtotime($birthDay) );
}

function myAddress($address, $city, $province) {
    $address = ucwords(strtolower($address));
    $city = ucwords(strtolower($city));
    $province = ucwords(strtolower($province));
    return "You are currently residing at $address $city $province \n";
}