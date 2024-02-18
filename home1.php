

<?php
    session_start();
        if($_SESSION['username']){
            // echo "welcome".$_SESSION['username'];
        }
        else{
            header("location:home.php");
        }
?>


<?php
require 'dbcon.php';
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>dmk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<?php  include 'include/navbar1.php' ?>
<body background="images/dash1.jpg" alt="damak hospital" style="width:100%; height:700px; margin:0;">

      
</body>
</html>