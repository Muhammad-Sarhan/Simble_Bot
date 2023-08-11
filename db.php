<?php
$servername = "localhost";
$usermame = "root";
$password = "";
$dbname = "chatbot";
$conn = new mysqli($servername, $usermame, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
