<?php


include 'db.php';

$p1 = $_POST['player1_id'];
$p2 = $_POST['player2_id'];
$winner = $_POST['winner_id'];

if ($p1 != $p2 && ($winner == $p1 || $winner == $p2)) {
    $stmt = $mysqli->prepare("INSERT INTO matches (player1_id, player2_id, winner_id) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $p1, $p2, $winner);
    $stmt->execute();
}

header("Location: matches.php");
?>