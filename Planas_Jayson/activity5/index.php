<?php
  $items = [
    ["Item 1", 100],
    ["Item 2", 200],
    ["Item 3", 300],
  ];

  echo computeTotalInventory($items[0][0], $items[0][1], 3);
  echo "\n";
  echo computeTotalInventory($items[0][0], $items[0][1], 5);
  echo "\n";
  echo computeTotalInventory($items[1][0], $items[1][1], 5);
  echo "\n";
  echo computeTotalInventory($items[0][0], $items[0][1], 50);
  echo "\n";
  echo computeTotalInventory($items[2][0], $items[2][1], 5);


	function computeTotalInventory ($itemName, $stocks, $qty) {
	  global $items;
	  if($itemName == "Item 1"){
      if($stocks > $qty){
        $newStock = $stocks-$qty;
        $items[0][1] = $newStock;
        return "$itemName - ($qty) | Remaining Stocks = $newStock";
      }
	    else {
        return "Not Enough Stocks";
      }
	  }
    else if($itemName == "Item 2"){
      if($stocks > $qty){
        $newStock = $stocks-$qty;
        $items[1][1] = $newStock;
        return "$itemName - ($qty) | Remaining Stocks = $newStock";
      }
	    else {
        return "Not Enough Stocks";
      }
	  }
      else if($itemName == "Item 3"){
      if($stocks > $qty){
        $newStock = $stocks-$qty;
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