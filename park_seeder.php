<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'np_user');
define('DB_PASS', 'password');

require 'inc/dbconnect.php';

$dbc->exec("DELETE FROM national_parks");

$descr = 'pretty';

$stats = [
[':name'=> 'Arches', ':location'=> 'Utah', 'date_established'=> 'November 12 1971', ':area_in_acres'=>76518.98, ':description'=>$descr],
[':name'=> 'Badlands', ':location'=> 'South Dakota', 'date_established'=> 'November 10 1978', ':area_in_acres'=>242755.94, ':description'=>$descr],
[':name'=> 'Carlsbad', ':location'=> 'New Mexico', 'date_established'=> 'May 14 1930', ':area_in_acres'=>46766.45, ':description'=>$descr],
[':name'=> 'Denali', ':location'=> 'Alaska', 'date_established'=> 'February 26 1917', ':area_in_acres'=>4740911.72, ':description'=>$descr],
[':name'=> 'Everglades', ':location'=> 'Florida', 'date_established'=> 'May 30 1934', ':area_in_acres'=>1508537.90, ':description'=>$descr],
[':name'=> 'Gates of the Artic', ':location'=> 'Alaska', 'date_established'=> 'December 2 1980', ':area_in_acres'=>7523897.74, ':description'=>$descr],
[':name'=> 'Glacier', ':location'=> 'Montana', 'date_established'=> 'May 11 1910', ':area_in_acres'=>1013572.41, ':description'=>$descr],
[':name'=> 'Glacier Bay', ':location'=> 'Alaska', 'date_established'=> 'December 2 1980', ':area_in_acres'=>3224840.31, ':description'=>$descr],
[':name'=> 'Grand Canyon', ':location'=> 'Arizona', 'date_established'=> 'February 26 1919', ':area_in_acres'=>1217403.32, ':description'=>$descr],
[':name'=> 'Grand Teton', ':location'=> 'Wyoming', 'date_established'=> 'February 26 1929', ':area_in_acres'=>309994.66, ':description'=>$descr]

];



$query = "INSERT INTO national_parks(name, location, date_established, area_in_acres, description)
VALUES(:name, :location, STR_TO_DATE(:date_established, '%M %d %Y'), :area_in_acres, :description)";

$statement = $dbc->prepare($query);

foreach ($stats as $key => $row){

    $statement->execute($row);
}




