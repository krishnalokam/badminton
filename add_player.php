<?php
include 'db.php';
$name = $_POST['name'];
$stmt = $mysqli->prepare("INSERT INTO players (name) VALUES (?)");
$stmt->bind_param("s", $name);
$stmt->execute();
header("Location: players.php");
?>