<?php

$host = 'localhost';
$user = 'mydatabase_admin';
$pass = 'Password123#@!';
$db_name = 'know_base';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}