<?php
	//remainingStocks = (stocks - purchased_qty)
	
	echo remainingStocksItem1(100 , 3) ;
	echo "\n" ;
	echo remainingStocksItem1(97 , 5) ;
	echo "\n" ;
	echo remainingStocksItem2(200 , 5) ;
	echo "\n" ;
	echo remainingStocksItem1(92 , 50) ;
	echo "\n" ;
	echo remainingStocksItem3(300 , 5) ;
	
	
	function remainingStocksItem1($stock1 , $purchased_qty) {
	  $remainingStocksItem1 = $stock1 - $purchased_qty ; 
	  return "Item 1 - ($purchased_qty) qty | Remaining Stocks = $remainingStocksItem1" ;
	} 
	function remainingStocksItem2($stock2 , $purchased_qty2) {
	  $remainingStocksItem2 = $stock2 - $purchased_qty2 ; 
	  return "Item 2 - ($purchased_qty2) qty | Remaining Stocks = $remainingStocksItem2" ;
	}
	function remainingStocksItem3($stock3 , $purchased_qty3) {
	  $remainingStocksItem3 = $stock3 - $purchased_qty3 ; 
	  return "Item 3 - ($purchased_qty3) qty | Remaining Stocks = $remainingStocksItem3" ;
	}
	
?>