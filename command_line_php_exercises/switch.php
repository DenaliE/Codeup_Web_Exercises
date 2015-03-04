<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('1');

switch($dayOfWeek) {
	case 1:
		// Output Monday
		echo "Today is Monday.";
		break;
		     
	case 2:
		// Output Tuesday
		echo "Today is Tuesday.";
		break;

	case 3:
		echo "Today is Wednesday.";
		break;

	case 4:
		echo "Today is Thursday.";
		break;

	// etc through day 7
	case 5:
		echo "Today is Friday.";
		break;

	case 6:
		echo "Today is Saturday.";
		break;

	case 7:
		echo "Today is Sunday.";
		break;
 }