<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Leaderboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-5">
    <h2 class="mb-4">Leaderboard</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Player</th>
                <th>Wins</th>
                <th>Losses</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $players = $mysqli->query("SELECT * FROM players");
            while ($player = $players->fetch_assoc()) {
                $id = $player['id'];
                $wins = $mysqli->query("SELECT COUNT(*) AS count FROM matches WHERE winner_id = $id")->fetch_assoc()['count'];
                $losses = $mysqli->query("SELECT COUNT(*) AS count FROM matches WHERE (player1_id = $id OR player2_id = $id) AND winner_id != $id")->fetch_assoc()['count'];
                echo "<tr><td>{$player['name']}</td><td>$wins</td><td>$losses</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="index.php" class="btn btn-secondary">Back</a>
</body>

</html>