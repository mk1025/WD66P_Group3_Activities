<?php
function computeEvenOdd($input){
    $sum = 0;
    $even = 0;
    $odd = 0;
    for($i = 0; $i <= $input; $i++){
        
        if($i % 2 == 0){
            $even += $i;
        }else{
            $odd += $i;
        }
        
    }
    $sum = $odd + $even;
    echo "Sum is $sum";

}

computeEvenOdd(30);
