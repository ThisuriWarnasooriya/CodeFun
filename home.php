<?php
session_start();


//to be created
require "init.php";

if (isset($_SESSION['user'])) {
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign in with GitHub</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body style="background-image: url(img/bg3.jpg); background-repeat: no-repeat;
  font-size: 30px; 
  background-size: cover;">
          <a href="logout.php"> <button class="btn btn-dark">Log out</button></a>
    <div class="transbox">
        <div style="padding-left: 10px;">
            <div class="row">
                <img class="logo" class="col-sm-3" src="img/github.png" alt="">
                <div class="col-sm-9">
                <h1 style="padding-top: 20px;" >Hello 

                <!-- displaying user information -->
                <?php 
// include_once "init.php";
// goToAuthUrl();
var_dump($_SESSION['payload']);
        // print ($username);
        ?>!</h1>
                </div>
               
            </div>
            <a href="'.$userData['link'].'" target="_blank"><button type="button" class="btn btn-dark">View Your GitHub profile </button></a>
            <br>
            <a href="https://github.com/new"><button type="button" class="btn btn-dark">Create New Repository </button></a>

            <br />

            <H3 style="padding-top: 10px;">Advance Coding Support</H3>
            <div class="row"  >
               <div class="col-sm-3" style="padding-bottom: 10px;">
               <a href="https://www.w3schools.com/html/"><button style="width: 300;" type="button"  class="btn btn-dark" >HTML</button></a>
            </div>
                <div class="col-sm-3">
                    <a href="https://www.w3schools.com/css/default.asp"><button style="width: 300;" type="button" class="btn btn-dark" class="col-sm-3" >CSS</button></a>
                </div>
                <div class="col-sm-3">
                    <a href="https://www.w3schools.com/java/"></a><button type="button" class="btn btn-dark" class="col-sm-3" >JAVA</button></a>
                </div>
                <div class="col-sm-3">
                    <a href="https://www.w3schools.com/cpp/"><button type="button" class="btn btn-dark" class="col-sm-3" >C++</button></a>
                </div>
            </div>

        </div>

    </div>
</body>

</html>