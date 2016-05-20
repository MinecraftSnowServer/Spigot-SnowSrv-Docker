<?php

session_start();

$peregrine = new Peregrine;
$peregrine->init();

$prism = new Prism;

// Connect with db, so we can show errors and not wait for ajax.
try {
    $db = new PDO('mysql:host='.MYSQL_HOSTNAME.';port='.MYSQL_PORT.';dbname='.MYSQL_DATABASE, MYSQL_USERNAME, MYSQL_PASSWORD);
//  $db = new PDO("sqlite:my/database/path/database.db");
}
catch(PDOException $e) {
    echo 'Prism WebUI can\'t connect to the database. ' . $e->getMessage();
    exit;
}