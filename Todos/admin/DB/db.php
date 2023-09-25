<?php

/**
 * Database connection
 */

$host_name = "localhost";
$username = "root";
$password = "";
$db_name = "todos";

$con = new mysqli($host_name, $username, $password, $db_name);

if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $con->connect_error;
    exit;
} 
