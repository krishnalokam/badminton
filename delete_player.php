<?php
include 'db.php';
$id = $_GET['id'];
$mysqli->query("DELETE FROM players WHERE id = $id");
header("Location: players.php");
?>