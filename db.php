<?php
$mysqli = new mysqli("localhost", "root", "root", "badminton");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>