<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;


$factory = (new Factory)
    ->withServiceAccount('tutorial-62491-firebase-adminsdk-l6d5c-d25535093d.json')
    ->withDatabaseUri('https://tutorial-62491-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
$auth = $factory->createAuth();

?>