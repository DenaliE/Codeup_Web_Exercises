<?php

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
    	echo $a + $b . PHP_EOL;
    }

    else {
    	echo "You need two numbers." . PHP_EOL;
    }

}

add(5, 4);

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
    	echo $a - $b . PHP_EOL;
    }

    else {
    	echo "You need two numbers." . PHP_EOL;
    }
}

 subtract(5, 4);

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
    	echo $a * $b . PHP_EOL;
    }

    else {
    	echo "You need two numbers." . PHP_EOL;
    } 
}

multiply(5, 4);

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
    	
    	if ($b == 0) {
    		echo "You cannot divide by zero." . PHP_EOL;
    	}
    	else {
    		echo $a / $b . PHP_EOL;
    	}
    }


    else {
    	echo "You need two numbers." . PHP_EOL;
    }
}

divide(5, 4);

function modulus($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
    	echo $a % $b . PHP_EOL;
    }

    else {
    	echo "You need two numbers." . PHP_EOL;
    } 
} 


modulus(5, 4);

