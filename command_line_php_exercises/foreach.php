<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

//#2 echo values with data type
foreach ($things as $values) {

	print (var_dump($values)) . "\n";{
		
   
	}
}


// //#3 echo values that are scalar
foreach ($things as $values) {

	if (is_scalar($values)) {
		
    echo $values . "\n";	
	}

}


//#Create a loop that will echo out every value, including those nested in arrays. 
//#4 echo all values
//original doesn't echo values in second array. add if is_array + 2nd foreach
foreach ($things as $values) {

	if (is_array($values)) {
		foreach($values as $inner_values)
	
    echo $inner_values . "\n";	
	}

	else {
		echo $values. "\n";
	}
}


