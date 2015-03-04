<?php 

echo "Please enter words to sort.  ";
$string = trim(fgets(STDIN));

//use space as delimiter for words; create array.
$words = explode(' ', $string);

foreach ($words as $word) {
	
	$var = str_split($word);
	
	$sorted = sort($var);
	
	$var = implode('', $var);

	// construct a string with this operator:  .=
	// add a space between words
	echo $var .= " ";
}






