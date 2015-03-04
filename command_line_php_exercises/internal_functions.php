<?php

// function check($variable) {
// 	if ((isset(fgets(STDIN))) == TRUE){
// 	echo "SET";
// }

// else {echo "EMPTY";}
// }

$nothing = null;
$something = '';
$array = array(1, 2, 3);

function check($input) {
	if (empty($input)) {
		echo $input. " is EMPTY. \n";
	}

	else {
		echo $input. "is not EMPTY. \n";
	}

	if (isset($input)) {
		echo "$input is SET. \n";
	}
	else {
		echo "$input is not SET. \n";
	}
}

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results



echo check($something);
echo check($nothing);
echo check($array);

$output = serialize($array);
echo $output .PHP_EOL;

//why is this not running?

$output = unserialize($output);
print_r($output) .PHP_EOL;