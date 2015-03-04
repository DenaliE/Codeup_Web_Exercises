<?php

define ('SIDES_OF_DICE', 6);

$roll = mt_rand(1, SIDES_OF_DICE);

echo "You rolled {$roll}\n";

/*safer not to put closing php tag because a hacker could inject more code after closing tag. 
Closing tag is unnecessary unless you're mixing PHP with eg HTML.
?>*/