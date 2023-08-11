<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Messages</title>
    <link rel="stylesheet" href="css/add-mass.css">
    <link rel="icon" href="image/OIP__1_-removebg-preview.png">
</head>

<body>
    <center>
        <center>
            <img src="image/OIP__1_-removebg-preview.png" alt="" id="logo">
        </center>
        <style>
            #logo {
                margin-top: 80px;
            }

            #massageuser {
                width: 250px;
                height: 30px;
                border-radius: 15px;
                border: 2px solid blue;
            }

            #massagebot {
                width: 250px;
                height: 30px;
                border-radius: 15px;
                border: 2px solid blue;
                margin-left: 5px;
                margin-top: 10px;
            }

            #bitton {
                width: 250px;
                height: 30px;
                border-radius: 15px;
                border: 2px solid blue;
                margin-left: 5px;
                margin-top: 25px;
                color: blue;
                background-color: #000;
            }
            #betton {
                width: 100%;
                height: 30px;
                border-radius: 15px;
                border: 2px solid blue;
                margin-left: 5px;
                margin-top: 25px;
                color: blue;
                background-color: #000;
            }
        </style>
        <form action="inseeert-massage.php" method="POST">
            <label for="">User Message : </label>
            <input type="text" name="massagesender" id="massageuser">
            <br>
            <label for="">Bot Message : </label>
            <input type="text" name="massageobt" id="massagebot">
            <br>
            <button id="bitton">Insert Massage</button>
        </form>
    </center>
    <br><br><br><br><br><br><br><br>
    <center>
        <a href="indexchat.php"><button id="betton">Go To Home Bage</button></a>
    </center>

</body>

</html>