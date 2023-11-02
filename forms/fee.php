<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "next";

// $conn = mysqli_connect($servername, $username, $password, $database);

// if (!$conn) {
//     die("connection loss: " . mysqli_connect_errno());
// }
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $firstname = $_POST["firstname"];
//     $lastname = $_POST["lastname"];
//     $number = $_POST["number"];
//     $email = $_POST["email"];
//     $date = $_POST["date"];
//     $platform = $_POST["platform"];
//     $subject = $_POST["subject"];
//     $topic = $_POST["topic"];
//     $chepter = $_POST["chepter"];
//     $problem = $_POST["problem"];

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <title>FEE</title>
    <style>
        body {
            width: 100%;
            height: 100%;
            background-image: url(how-to-integrate-a-payment-gatway-into-a-website-hero-shot.jpg);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .container {
            width: 400px;
            height: 420px;
            border: 2px solid black;
            margin: auto auto;
            padding: 30px 50px;
            padding-bottom: 10px;
            background-color: rgb(248, 249, 250);
            opacity: 1;
            box-sizing: border-box;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            font-family: 'Architects Daughter', cursive;
        }

        .credit {
            width: 100%;
            font-size: 20px;
            font-weight: bolder;
            color: black;
            /* padding-left: 10px; */
        }

        input[type="text"],input[type="tel"] {
            width: 280px;
            height: 35px;
            margin-bottom: 10px;
            margin-left: 0px;
            margin-right: 20px;
            margin-top: 10px;
            padding-left: 10px;
            padding-right: 20px;
            box-sizing: border-box;
            background-color: white;
            position: relative;
            border-radius: 10px;
            border: 2px solid black;
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight: bolder;
            color: black;

        }

        span {
            padding-left: 0px;
            font-size: 22px;

        }

        ::placeholder {
            font-weight: bold;
            color: black;
        }

        /* #mycard
        {
            margin-bottom: 45px;
            margin-top: 25px;
            padding-left: 73px;
            font-size: larger;

        } */
        button {
            width: 280px;
            height: 40px;
            font-size: larger;
            font-weight: bolder;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-weight: 900;
            margin: 8px;
            margin-top: 15px;
            margin-left: 0px;
            margin-bottom: 15px;
            padding-left: 10px;
            padding-bottom: 5px;
            box-sizing: border-box;
            position: relative;
            border-radius: 10px;
            border: 2px solid black;
            color: black;
            background-size: 200% auto;
            background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA 51%, #77A1D3 80%);
        }

        .button:hover {
            color: #fff;
            background-position: right center;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.25s;

        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: transform 0.2s ease-in
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;

        }
    </style>
</head>

<body>
    <h1>Payment Details</h1>
    <div class="container">

        <!-- <div class="credit" id="mycard">
            <button onclick="window.location.href='fee.html'"><i class="fa fa-credit-card" ></i> Credit Card/Debit Card</button>
            
        </div> -->
        <form action="fees.php">
            <div class="credit" class="card">
                <span>Card Owner</span>
                <br><input type="text" placeholder="Name" required>
            </div>
            <div class="credit">
                <span>Card Number</span>
                <br>
                <input type="tel" placeholder="1234 5678 4567 6789" required>

            </div>

            <div class="credit" class="card">
                <span>Date</span>
                <br>
                <input type="text" placeholder="MM/YYYY" required>
             
            </div>
            <div class="credit" class="card">
                <span>CVV</span>
                <br>
                <input type="text" placeholder="CVV" required>
            </div>
            <div class="credit">
                <!-- <input type="button" value="Pay"> -->
                <button class="button"><span>Pay</span></button>
            </div>
        </form>
    </div>
</body>

</html>