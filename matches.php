<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Record Match</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-5">
    <h2 class="mb-4">Record Match</h2>
    <form action="record_match.php" method="post" class="mb-4">

        <?php $players = $mysqli->query("SELECT * FROM players"); ?>

        <div class="mb-3">
            <label class="form-label">Player A:</label>
            <select name="player1_id" class="form-select">
                <?php while ($p = $players->fetch_assoc())
                    echo "<option value='{$p['id']}'>{$p['name']}</option>"; ?>
            </select>
        </div>

        <?php $players->data_seek(0); ?>

        <div class="mb-3">
            <label class="form-label">Player B:</label>
            <select name="player2_id" class="form-select">
                <?php while ($p = $players->fetch_assoc())
                    echo "<option value='{$p['id']}'>{$p['name']}</option>"; ?>
            </select>
        </div>

        <?php $players->data_seek(0); ?>

        <div class="mb-3">
            <label class="form-label">Winner:</label>
            <select name="winner_id" class="form-select">
                <?php while ($p = $players->fetch_assoc())
                    echo "<option value='{$p['id']}'>{$p['name']}</option>"; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</body>

</html>