<?php

$url = getenv('DATABASE_URL');

$dbparts = parse_url($url);

$host = $dbparts['host'];
$user = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'], '/');
$port = $dbparts['port'];

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
