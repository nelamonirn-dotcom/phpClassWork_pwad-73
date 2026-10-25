<?php
// Connection with mySQL

$conn = new mysqli("localhost", "root", "", "cleaning_service");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
