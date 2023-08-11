<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<?php
$select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
$select_profile->execute([$user_id]);
$fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Borel&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link rel="icon" href="image/OIP__1_-removebg-preview.png">
</head>

<body>
    <center>
        <h2><span style="font-family: 'Borel', cursive;">Welcome Mr <?= $fetch_profile['name']; ?></span></h2>
    </center>
    <center>
        <img src="image/OIP__1_-removebg-preview.png" alt="" id="logo">
    </center>
    <style>
        #logo {

            margin-top: 110px;
        }
    </style>
    <?php
    $url = 'indexchat.php';
    $time = 3;
    header("refresh: $time; url=$url");
    exit();
    ?>
</body>

</html>