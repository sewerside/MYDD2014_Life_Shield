<?php
// Backend API for Life Shield

/* TODO

Create tables:
- Alert
- Resident
- Guard

Mechanics:
- Visitor come, tell guard the visit address to visit and provide car number plate and name (optional)
- Guard register the car no. plate, name and select the visit address. A Push Notification will be sent to the resident
-


*/

ini_set("display_errors", 1);
error_reporting(E_ALL ^ E_NOTICE);
date_default_timezone_set("Asia/Kuala_Lumpur");

//-----------------------------------------------
// Database
//-----------------------------------------------

$DBServer = 'localhost';
$DBUser   = 'mydd2014';
$DBPass   = 'mydd2014rocks';
$DBName   = 'LifeShield';
$mysqli   = new mysqli($DBServer, $DBUser, $DBPass, $DBName);

if ($mysqli->connect_error) {
    trigger_error('Database connection failed: '  . $mysqli->connect_error, E_USER_ERROR);
}

echo "hello world";




?>