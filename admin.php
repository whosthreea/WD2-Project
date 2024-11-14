<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'password') {
        $_SESSION['loggedin'] = true;
        header('Location: admin_dashboard.php');
    } else {
        $error = "Invalid credentials.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login</h1>
    <form method="POST">
        <label for="username">Username:</label>
        <!--- TBC --->
    </form>
    <?php if (isset($error)): ?>
        <p><?= $error ?></p>
    <?php endif; ?>
</body>
</html>
