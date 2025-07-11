<?php
// Start session if needed
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
    <!-- Global CSS -->
    <link rel="stylesheet" href="global.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/favicon.png">
</head>
<body>
    <?php include 'modules/header.php'; ?>

    <main>
        <section style="text-align:center; margin-top: 50px;">
            <img src="assets/server.png" alt="Attendance System" style="max-width:300px;">
            <h1>Welcome to the Attendance Management System</h1>
            <p>Please <a href="pages/login.php">Login</a> to continue.</p>
        </section>
    </main>

    <?php include 'modules/footer.php'; ?>
</body>
</html>
