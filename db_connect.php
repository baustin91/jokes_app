<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// modify these settings according to the account on your database server.
$dbUrl = getenv('JAWSDB_URL');
$urlParts = parse_url($dbUrl);
$host = $urlParts['host'];
$username = $urlParts['user'];
$password = $urlParts['pass'];
$database = ltrim($urlParts['path'], '/');
$port = isset($urlParts['port']) ? $urlParts['port'] : '3306'; 


$mysqli = new mysqli($host, $username, $password, $database, $port);
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";
