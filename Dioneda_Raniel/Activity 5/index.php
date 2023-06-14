<?php
  $stock1=100;
  $stock2=200;
  $stock3=300;

 echo remainingStock($stock1 , 3);
 echo "\n";
 echo remainingStock($stock1 , 5);
 echo "\n";
 echo remainingStock($stock2 , 5);
 echo "\n";
 echo remainingStock($stock1 , 50);
 echo "\n";
 echo remainingStock($stock3 , 5);
  
  function remainingStock($stock, $qty){
    global $stock1, $stock2, $stock3;
    if($stock==$stock1){
      if($qty<=$stock1){
        $currentStock= $stock1 - $qty;
        $stock1=$currentStock;
       return "Item 1 - ($qty) | Remaining Stocks = $currentStock" ;
     }else{
        return "Out of Stock";
     }
    }else if($stock == $stock2){
        if($qty <= $stock2){
          $currentStock2 = $stock2 - $qty ;
          $stock2 = $currentStock2;
          return "Item 2 - ($qty) | Remaining Stocks = $currentStock2" ;
        }else{
          return "Out of Stock";
        }
      }else if ($stock == $stock3){
        if($qty <= $stock3){
          $currentStock3 = $stock3 - $qty ;
          $stock3 = $currentStock3;
          return "Item 3 - ($qty) | Remaining Stocks = $currentStock3" ;
        }else{
          return "Out of Stock";
        }
      }else{
        return "Item Not Found";
      }
    }
?>