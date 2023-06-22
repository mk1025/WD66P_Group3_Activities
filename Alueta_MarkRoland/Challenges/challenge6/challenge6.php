<?php
// WD66P - Mark Roland Alueta
// Coding Challenge #6
/*
     Problem #1:

    Given a set of numbers:
    35, -9, 400, 78, 300, 900, 200, 1500

    Print the largest number in the set.
*/

$set_1 = [35,-9,400,78,300,900,200,1500];
$largestNumber = 0;

foreach ($set_1 as $number) {
    if ($number > $largestNumber) {
        $largestNumber = $number;
    }
}

echo $largestNumber;

/*
    Problem #2:

    Given a set of numbers:
    3, 3, -8, -100, 20, 90, 0, -1

    Print all negative values;

*/

$set_2 = [3,3,-8,-100,20,90,0,-1];

foreach ($set_2 as $number) {
    if ($number < 0) {
        echo $number . "\n";
    }
}

/*
    Problem #3:

    Given a two set of numbers:
    Set 3 = 10, 20, 35, 70, 90
    Set 4 = 7, 20, 2, 8, 90

    Print all values with the same value of the same index.

*/

$set_3 = [10,20,35,70,90];
$set_4 = [7,20,2,8,90];

foreach ($set_3 as $key => $number) {
    if ($number == $set_4[$key]) {
        echo "Same Index, Same Value $number \n";
    }
}