<?php
	/*
	 * Hacker Rank
	 * Stock Maximize Solution
	 * 
	 */

    function calculateProfit($stock_array){

	    $do_buy = 1 * count($stock_array); // 1 for buy, 0 for sell
	    $profit = 0;
	    $max_price = 0;


		for ($i = count($stock_array) - 1 ; $i >=0 ; $i = $i - 1){

		  $array_index = $stock_array[$i]; 
	            if ($max_price <= $array_index){
                      $do_buy = array();
	              $do_buy[$i] = 0;
	              $max_price = $array_index;
		    }

	    	$profit = $profit + ($max_price - $array_index);

		}


		print $profit . "\n";


	}

	// Program Begins Here:

        // User Input Test Cases
	$f = fopen( 'php://stdin', 'r' );

	// Reading from the File
	while( $line = fgets( $f)  ) {

	  $input_array[] = $line;

	}

	// No of test cases in the first line
	$test_cases = $input_array[0];

	/*
	* Each test case having two parts 
	* Since we're using array count function
	* We can ignore the first part which denotes days
	*/
	$no_of_occurrences = $test_cases * 2;
	
	// In this for loop we're looping through days 
	for($count=2;$count<=$no_of_occurrences;$count = $count+2) {
		// Tempory Field without proper validation
		$stock_temp_array = $input_array[$count];
		
		// Removing Spaces from Values and Convert into a real array
		$stock_array = explode(" ", $stock_temp_array);

		foreach ($stock_array AS $index => $value){
			$stock_array[$index] = (int)$value; 
		}
		
		// Calling the function
		calculateProfit ($stock_array);
	}

?>
