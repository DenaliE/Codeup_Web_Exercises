<?php

// $physicistsArray = ['Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark'];

// $string1 = array_pop($physicistsArray);
// $string2 = array_push($physicistsArray, 'and');
// $string3 = array_pop($physicistsArray);
// echo "{$string1}{$string2}{string3}";


// $physicistsString = implode(', ', $physicistsArray);
// $physicistsArray = explode(', ', $String1, $String2);


// echo $physicistsString;
//echo"{$string1}{$string2}";

function humanized_list($array, $alphab = false) {
	
	if($alphab = true) {
		
		asort($array);
	}

	$last_item = array_pop($array);
	$string = implode(', ', $array);
	return $string . ', and ' . $last_item;
}


$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode(',', $physicistsString);
$famousFakePhysicists = humanized_list($physicistsArray);

echo $famousFakePhysicists;



