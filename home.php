<?php
session_start();
include("dbcon.php");

if(isset($_POST['submit'])){
    $user = $_POST["username"];
    $psd = $_POST["password"];

    $query="SELECT * FROM logined WHERE username = '$user' && password = '$psd'";
    $data = mysqli_query($con, $query);
    $total = mysqli_num_rows($data);

    if($total > 0){
        $_SESSION['username'] = $user;
        header("location:home1.php");
        exit;
    }
    else{
        echo "<script>alert('Invalid username/password!!');</script>";
    }
}
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

  <style>
    body {

      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      height: 0;
      background-color: #f2f2f2;
    }
    .login-form-container {
      float: left; /* Float the form to the left side */
      padding: 20px;
      margin-top: 100px;
    }
   

    .login-form {
      text-align: center;
      padding: 20px;
      margin: auto;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .login-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: 	#00BFFF;
      color: white;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
      text-decoration: none;
    }

    .login-button:hover {
      background-color: #00008B;
    }
    .marquee-container {
      overflow: hidden;
      font-size: 30px;
      padding: 100px 0;
      color: white;
      white-space: nowrap;
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      animation: marquee linear 0.5s infinite;
    }

  </style>

</head>
<?php  include 'include/navbar.php' ?>
<body background="images/dash1.jpg" alt="damak hospital" style="width:100%; height:700px; margin:0;">


<div class="login-form-container">
      <div class="login-form">
    <h2>Admin Login</h2>


    <form method="POST">
      <input type="text" name="username" placeholder="Username" required = "">
      <br>
      <input type="password" name="password" placeholder="Password" required="">
      <br>
      <button class="login-button" type="submit" name="submit">Login</button>
    </form>


    </div>
    </div>
      
        <div class="marquee-container">
          <marquee><p>Welcome to Damak Hospital - Your Trusted Healthcare Partner!!! Caring for You and Your Loved Ones at Damak Hospital.</marquee>
           

        </div>
</body>
</html>