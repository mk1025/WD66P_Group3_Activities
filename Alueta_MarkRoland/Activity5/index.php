<?php 


/* 

    New line \n and Tab Spacing \t doesn't work in rendering so I used <br> instead;
    

*/

$item_1 = 100; // bread
$item_2 = 200; // eggs
$item_3 = 300; // salt


function buyItem ($item, $quantity) {
    global $item_1, $item_2, $item_3;

    if($quantity <= 0){
        return "Please enter a valid quantity <br>";
    }

    switch($item){
        case "bread": return 
            $item_1 > 0
                ? ($quantity <= $item_1 ? "<pre> Item 1: Bread \t ($quantity) qty \t | Remaining Stocks = " . ($item_1 -= $quantity) . "</pre>" : "Not enough stocks for Bread! <br>")
                : "This item (Bread) is sold out! <br>";
        case "eggs": return
            $item_2 > 0
                ? ($quantity <= $item_2 ? "<pre> Item 2: Eggs \t ($quantity) qty \t | Remaining Stocks = " . ($item_2 -= $quantity) . "</pre>" : "Not enough stocks for Eggs! <br>")
                : "This item (Eggs) is sold out! <br>";
        case "salt": return
            $item_3 > 0
                ? ($quantity <= $item_3 ? "<pre> Item 3: Salt \t ($quantity) qty \t | Remaining Stocks = " . ($item_3 -= $quantity) . "</pre>" : "Not enough stocks for Salt! <br>")
                : "This item (Salt) is sold out! <br>";
        default: return "Item is not on the Inventory! <br>";
    }

}

echo buyItem("bread", 3);
echo buyItem("bread", 5);
echo buyItem("eggs", 5);
echo buyItem("bread", 50);
echo buyItem("salt", 5);




?>