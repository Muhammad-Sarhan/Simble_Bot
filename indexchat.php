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
if (isset($_GET['ie'])) {
    $ie = $_GET['ie'];
} else {
    $ie = 1; // تعيين قيمة افتراضية للمتغير إذا لم يتم تمريره في الـ URL
}
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



$sql = "SELECT * FROM users_sessions WHERE Email = '$ie' AND State = 'Active'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['username'];
    $email = $row['Email'];
}
$entager = '/AddMassage';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>
    <link rel="stylesheet" href="css/style-send.css">
    <link rel="icon" href="image/OIP__1_-removebg-preview.png">
</head>

<body>
    <header>
        <center>
            <img src="img/OIP.jpeg" alt="" id="img">
        </center>
        <br>
        <center>
            <p>chatBOT</p>
        </center>
    </header>
    <section>
        <?php
        if (isset($_POST['message'])) {
            $ende = $_POST['message'];
        } else {
            $ende = 'No message found';
        }



        if ($ende == '/AddMassage') {
            header("location: masseges-add.php?ie=" . $ie);
        } else {
        ?>
            <?php
            $sql = "SELECT * FROM massages_bot WHERE mass_sender = '$ende'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $mass = $row['mass'];
                    $mass_sender = $row['mass_sender'];
                    $mail = $row['mail'];
                    $id_user = $row['id_user'];
            ?>
                    <section>
                        <section dir="rtl">
                            <img src="img/OIP__1_-removebg-preview.png" alt="" id="imguser">
                            <br>
                            <span id="masssender"><?= $mass_sender; ?></span>
                        </section>
                        <br>
                        <section dir="ltr">
                            <img src="img/OIP__2_-removebg-preview.png" alt="" id="imgbot">
                            <br>
                            <span id="masssebot"><?= $mass; ?></span>
                        </section>
                    </section>
            <?php
                }
            }
            ?>

            <link rel="stylesheet" href="css/style-send.css">

            <style>
                #imguser {
                    border-radius: 50%;
                    width: 60px;
                    height: 40px;
                    background-color: #fff;
                }

                #masssender {
                    padding: 20px;
                    background: #111010;
                    color: #fff;
                    border-bottom-right-radius: 15px;
                    border-top-left-radius: 15px;
                    border-bottom-left-radius: 15px;
                    margin-right: 60px;

                }

                #imgbot {
                    border-radius: 50%;
                    width: 60px;
                    height: 60px;
                    background-color: #fff;
                }

                #masssebot {
                    padding: 20px;
                    background: green;
                    color: #fff;
                    border-bottom-right-radius: 15px;
                    border-top-left-radius: 15px;
                    border-bottom-left-radius: 15px;
                    margin-left: 60px;

                }
            </style>
        <?php
        }
        ?>
    </section>
    <form action="indexchat.php" method="POST" id="send">
        <textarea name="message" id="textarea" cols="30" rows="10"></textarea>
        <button type="submit" id="send-button">Send Message</button>
    </form>
    <center id="hhh">
        <footer>
            <em>
                <p style="display: inline-block;">© All rights reserved 2023</p>
            </em>
            <span style="display: inline-block;">
                <a href="http://profile-muhammad-sarhan.eb2a.com/" style="text-decoration: none;">Muhammad
                    Sarhan</a> -
                <em>Website Developer</em>
            </span>
        </footer>
    </center>
</body>

</html>