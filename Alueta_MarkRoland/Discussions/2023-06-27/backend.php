<?php

    print_r($_POST);

    

    echo "<br> First Name: " . $_POST["first_name"];

    echo "<br> Last Name: " . $_POST["last_name"];
    
    echo "<br />";

    // For the Sum Operation

    // if ($_POST['operation'] == '+') {
    //     $sum = $num1 + $num2;
    //     echo "Sum: $sum";
    // }

    if(isset($_POST['terms_conditions'])) {
        echo $_POST['terms_conditions'];
    } else {
        echo "Did not checked";
    }