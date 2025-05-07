<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Players</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-5">
    <h2 class="mb-4">Players</h2>
    <form action="add_player.php" method="post" class="mb-3 d-flex gap-2">
        <input type="text" name="name" class="form-control w-50" placeholder="Enter player name" required>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

    <ul class="list-group mb-4">
        <?php
        $result = $mysqli->query("SELECT * FROM players");
        while ($row = $result->fetch_assoc()) {
            echo "<li class='list-group-item d-flex justify-content-between align-items-center'>{$row['name']}
                    <a href='delete_player.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                  </li>";
        }
        ?>
    </ul>

    <a href="index.php" class="btn btn-secondary">Back</a>
</body>

</html>