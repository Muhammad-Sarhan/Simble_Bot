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


<?php

$servername = "localhost";
$usermame = "root";
$password = "";
$dbname = "chatbot";
$conn = new mysqli($servername, $usermame, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





if (isset($_POST['massageobt'])) {
    $massageobt = $_POST['massageobt'];
} else {
    $massageobt = 'No message found';
}

if (isset($_POST['massagesender'])) {
    $massagesender = $_POST['massagesender'];
} else {
    $massagesender = 'No message found';
}

// Prepare the SQL statement (use prepared statement or proper sanitization)
$sql = "INSERT INTO `massages_bot`(`mass`, `mass_sender`, `mail`) VALUES ('$massageobt','$massagesender','NULL')";

// Execute the query
$result = mysqli_query($conn, $sql);


header("location: masseges-add.php");

?>


?>