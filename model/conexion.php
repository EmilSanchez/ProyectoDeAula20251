<?php
// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conexion = new mysqli("localhost", "root2", "", "phplogin");

// Set the character set to utf8mb4 for better compatibility
$conexion->set_charset("utf8mb4");

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}
?>