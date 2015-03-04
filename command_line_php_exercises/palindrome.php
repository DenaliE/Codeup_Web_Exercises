<?php

function isPalindrome(){
	//get input from user (word(s) to be tested)
echo "Please enter a word to see if it's a palindrome.  ";
$input = trim(fgets(STDIN));

//strip spaces and special characters
//input var. change var and save. repeat. 

$newInput = str_replace(' ', '', $input);
$newInput = preg_replace('/[^A-Za-z0-9\-]/', '', $newInput);
$newInput = str_replace('-', '', $newInput);


//make it lowercase
$lwrdInput = strtolower($newInput);

//reverse it
$reverse = strrev($lwrdInput);


//test to see if they're the same
	if ($lwrdInput == $reverse){
		echo "$input is a palindrome.";
	}

	else {
		echo "$input is not a palindrome.";
	}
}

echo isPalindrome();

