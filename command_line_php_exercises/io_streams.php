<?php
//ADD check for integers
if ($argc == 3) {
	$min = $argv[1];
	$max = $argv[2];
	
} else {
	// ask them to enter small number
	fwrite(STDOUT, 'Please enter enter a minimum number. ');
	$min = trim(fgets(STDIN));
	fwrite(STDOUT, 'Please enter enter a maximum number. ');
	$max = trim(fgets(STDIN));
}

$counter = 0;

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'What is your first name? ');

// Get the input from user
$firstName = fgets(STDIN);

// Output the user's name
fwrite(STDOUT, "Hello $firstName \n" . "Want to play a game? ");
// gets answer to question
$play = trim(strtolower(fgets(STDIN)));

echo "Guess a number between $min and $max ";

$answer = mt_rand($min, $max);

if ($play == 'yes') {

	do
	{
		
		$guess = trim(fgets(STDIN));

		$counter++;

		if ($guess > $answer) {
			fwrite(STDOUT, 'Guess lower. ');
		} elseif($guess < $answer) {
			fwrite(STDOUT, 'Guess higher. ');
		}


	} while ($guess != $answer);

	fwrite(STDOUT, "You guessed correctly. It took you $counter guess(es)");

}










// do { 

// // if (strtolower(fgets(STDIN)) == 'yes') {

// // fwrite(STDOUT, "Pick a number between 1 and 100.");

// // }

// // else {echo "Error 1";}
// //$play = trim(strtolower(fgets(STDIN)));

// $counter++;

// if ($guess > $answer) {
// 	fwrite(STDOUT, 'Guess lower. ');
// }

// elseif ($guess < $answer) {
// 	fwrite(STDOUT, 'Guess higher. ');
// }

// else {
// 	fwrite(STDOUT, "Good guess! You guessed $counter times.");
// }


// } while ($guess != $answer);

// }

// else {
// 	echo "Then get lost.";
// }





