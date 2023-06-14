<?php
  $items = [
    ["Item 1", 100],
    ["Item 2", 200],
    ["Item 3", 300],
  ];

  echo computeTotalInventory($items[0][0], 3);
  echo "\n";
  echo computeTotalInventory($items[0][0], 5);
  echo "\n";
  echo computeTotalInventory($items[1][0], 5);
  echo "\n";
  echo computeTotalInventory($items[0][0], 50);
  echo "\n";
  echo computeTotalInventory($items[2][0], 5);


	function computeTotalInventory ($itemName, $qty) {
	  global $items;
	  if($itemName == "Item 1"){
      if($items[0][1] >= $qty){
        $newStock = $items[0][1]-$qty;
        $items[0][1] = $newStock;
        return "$itemName - ($qty) | Remaining Stocks = $newStock";
      }
	    else {
        return "Not Enough Stocks";
      }
	  }

    else if($itemName == "Item 2"){
      if($items[1][1] >= $qty){
        $newStock = $items[1][1]-$qty;
        $items[1][1] = $newStock;
        return "$itemName - ($qty) | Remaining Stocks = $newStock";
      }
	    else {
        return "Not Enough Stocks";
      }
	  }

    else if($itemName == "Item 3"){
      if($items[2][1] >= $qty){
        $newStock = $items[2][1]-$qty;
        $items[2][1] = $newStock;
        return "$itemName - ($qty) | Remaining Stocks = $newStock";
      }
      else {
        return "Not Enough Stocks";
      }
	  }
    
    else {
      return "No Item";
    }
	}
	
?>