<?php

// Exercise #6 - Arrays

// Here is a list of 10 prime numbers 2, 3, 5, 7, 11, 13, 17, 19, 23, 29.
// Save them to an array variable called $prime_numbers.
// Echo out the prime number 7.
// Create an associative array called $car. Set the keys for this array as: year, make, model, color, mileage.
// Set the values for the keys. (Make up the mileage part & add other keys with there values, if you want.)
// Create a multidimensional array called $cars.

// Includes at least 3 inner arrays.

// The keys should be the owner's name and you should describ the car that they own. (This is building off the previous task.)

// On the command line, how would you access the 3rd array's information for the 'make' of the owner's car?
// What's the purpose of using the multidimensional array?

// $prime_numbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];
// echo $prime_numbers[3]."\n";

// $car = [
	
// 	'denalis_car' =>
// 	[
// 	'year' => '2008',
// 	'make' => 'Mazda',
// 	'model' => '3',
// 	'color' => 'grey',
// 	'mileage' => '80000'
// 	],
	

// 	'steves_car' =>
// 	[
// 	'year' => '1988',
// 	'make' => 'Chevy',
// 	'model' => 'Cheyenne',
// 	'color' => 'white',
// 	'mileage' => '100000'
// 	],

// 	'crookys_car' =>
// 	[
// 	'year' => '2014',
// 	'make' => 'Tesla',
// 	'model' => 'X',
// 	'color' => 'green',
// 	'mileage' => '0'
// 	],
// ]; 

// echo $car['crookys_car']['make'];

// Exercise #3 - Variable Assignment

// In the REPL (read–eval–print loop) create a variable $age and set it equal to an integer of your age.
// Set another variable $original_age equal $age.
// So we have gone forward in time with the Delorean 5 years. Using an incrementer (either post or pre) add 5 years to your age and echo the results. Now echo $original_age so you see what year you were before you traveled in time.
// Now you have gone back in time 7 years. Decrement your $age by 7 years.
// Explain the purpose of the REPL.

// $age = 33;

// $original_age = $age;

// $age +=5;

// echo $age. "\n";

// echo $original_age. "\n";

// $age -= 7;

// echo $age;

// Exercise #4 - Variable Assignment by Reference

// In your REPL create a variable $score and set it equal to 75.
// Now assign a new variable $reference_score equal to $score.
// The team just scored 3 points so using a combined operator ( += ) add 3 points to $score. Now echo $score and echo $reference_score.
// What is the advantage of using combined operators and give a scenario, other than the one you just did, that would be appropriate to use this technique.

// $score = 75;

// //$reference_score &= $score; wrong syntax

// $reference_score = &$score;


// $score +=3;

// echo $score. "\n";

// echo $reference_score. "\n";

// Exercise #7 - Git

// Create empty reposity on github.
// Create directory locally and change directory (cd) into it .
// Initialize git locally in this folder.

// Add your remote reposity to this local folder.
// ***IE, git remote add origin git@github.com:YourUsername/Codeup_Exercises.git
// ** Later: git push -u origin master (first commit)


// Create empty file called TEST.md.
// Add, commit and push this file up.
// Verify that the file is online on github
// Scrap it and do it again.
// Research the all in compassing purpose of github. On the command line, create an empty file and in your own words, send a research_github.txt to Isaac's email, isaac@codeup.com.

// Exercise #8 - Control Structures

// Title file: hw_wk1_p1.php

// In this file create a variable called $hungry and set it to TRUE if you are hungry or FALSE if you are not.
// Create another variable and call it $food_available and set it equal to TRUE or FALSE.
// Create an if statement that will echo 'We are fed and good to go.' if both you have $food_available and are $hungry are true.
// Now create another variable $have_money and set it to either TRUE or FALSE. Adjust your if statement so it reads. If you are $hungry and there is $food_available or $have_money then you will eat. If none of those are true then echo "Not hungy but thank you!"

// $hungry = FALSE;
// $food_available = TRUE;
// $have_money = TRUE;

// if($hungry = TRUE && $food_available = TRUE) {

// 	echo 'We are fed and good to go.';
// }

// if($hungry = TRUE && ($food_available = TRUE || $have_money = TRUE) {

// 	echo 'We are fed and good to go.';

//	else { echo "Not hungy but thank you!";}
// }


// Exercise #9 - Ternary Operator

// Convert the following into the ternary operator form:
$logged_in = TRUE;

// if($logged_in)
// {
//     $logged_in_status = 'You are logged in';
// } else {
//     $logged_in_status = 'You are not logged in';
// }

// echo $logged_in_status

//example
//$age = 22;
//$isAdult = $age >= 18 ? true : false;

$logged_in_status = ($logged_in) ? 'You are logged in': 'You are not logged in';
//$logged_in is true, so $logged_in_status = (true) 

echo $logged_in_status;


