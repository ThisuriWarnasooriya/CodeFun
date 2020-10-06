<?php

session_start();


//to be created
require "init.php";

if (isset($_SESSION['user'])) {
    header("location: callback.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign in with GitHub</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body style="margin-top: 200px; text-align: center; font-size: 30px; background-image: url(img/bg3.jpg); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
    <div class="transbox">
    <img src="img/github.png">
        <a href="login.php">
        <button type="button" class="btn btn-dark">Sign in with GitHub</button>
</a>
    </div>
</body>

</html>