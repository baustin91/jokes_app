<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// modify these settings according to the account on your database server.
$dbUrl = getenv('JAWSDB_URL');
$host = $urlParts['DB_HOST'];
$port = "3306";
$username = $urlParts['DB_USER'];
$user_pass = $urlParts['DB_PASS'];
$database_in_use = $urlParts['DB_NAME'];


$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";
