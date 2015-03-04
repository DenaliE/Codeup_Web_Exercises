<?php

$stmt = $dbc->query('SELECT * FROM national_parks');

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

