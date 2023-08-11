<?php
if (isset($_POST['message'])) {
    $ende = $_POST['message'];
} else {
    $ende = 'No message found';
}


include("db.php");

if ($ende == '/AddMassage') {
    header("location: masseges-add.php");
} else {
?>
    <?php
    $sql = $sql = "SELECT * FROM massages_bot WHERE mass_sender = '$ende'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
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
    <link rel="icon" href="image/OIP__1_-removebg-preview.png">

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