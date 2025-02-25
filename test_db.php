<?php
include("./dB/config.php"); // Adjust the path based on where your config.php is

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
} else {
    echo "Database Connected Successfully!";
}
?>