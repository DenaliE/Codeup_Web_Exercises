<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'np_user');
define('DB_PASS', 'password');

require 'inc/dbconnect.php';

if(isset($_GET['page']) && $_GET['page'] >= 1){

    $pg = $_GET['page'];

} else {
    $pg = 1;
}

$num = $pg - 1;

$limit = 4;

$offset = $num * $limit;

$prev = $pg - 1;

$next = $pg + 1;

$stmt = $dbc->prepare("SELECT * FROM national_parks LIMIT :limit OFFSET :offset");
$stmt->bindValue('offset', $offset, PDO::PARAM_INT);
$stmt->bindValue('limit', $limit, PDO::PARAM_INT);
$stmt->execute();

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

//get all parks with mySQL
$all_parks = $dbc->query("SELECT * FROM national_parks");
$count = $all_parks->rowCount();

$last = ceil($count/4);






