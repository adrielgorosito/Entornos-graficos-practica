<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'user');
define('DB_PASS', 'password');
define('DB_NAME', 'php_project');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}