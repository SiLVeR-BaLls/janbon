<?php

include 'include/config.php';
include 'include/student_connect.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/student.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js"></script>

    <title>student Dashboard</title>
    
</head>
<body>
    
<h1>student Dashboard</h1>


    <?php include 'include/header.php'; ?>
    <?php include 'include/navbar.php'; ?>

    <?php if (!$isLoggedIn): ?>
                <?php include('include/log_in(ifnoaccount).php'); ?>

    <?php else: ?>
                <?php include('include/profile.php'); ?>

<?php endif; ?>
<?php include 'include/footer.php'; ?>


</body>
</html>
