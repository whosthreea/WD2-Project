<?php

require_once 'connect.php';

$stmt = $pdo->query("SELECT * FROM gardens");
$gardens = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Winnipeg Community Gardens</title>
</head>
<body>
    <h1>Welcome to Winnipeg Community Gardens</h1>
    <h2>Our Gardens</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Location</th>
        </tr>
        <?php foreach ($gardens as $garden): ?>
            <tr>
                <td><?= htmlspecialchars($garden['garden_id']); ?></td>
                <td><?= htmlspecialchars($garden['name']); ?></td>
                <td><?= htmlspecialchars($garden['location']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
