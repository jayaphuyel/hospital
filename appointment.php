<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 100vh;
    }
    
  </style>

    <title>Take Appointment</title>
</head>
<body background="images/dash1.jpg" alt="damak hospital" style="width:100%; height:700px; margin:0;">


  
    <div class="container">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Take appoinment 
                            <a href="index2.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code3.php" method="POST">

                            <div class="mb-3">
                                <label>Patient Full Name</label>
                                <input type="text" name="name" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Patient address</label>
                                <input type="text" name="address" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Patient phone no</label>
                                <input type="text" name="mobile" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Doctor Name</label>
                                <input type="text" name="dname" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Doctor Qualification</label>
                                <input type="text" name="dquali" class="form-control" required="">
                            </div>
                        
                            <div class="mb-3">
                                <button type="submit" name="save_appoi" class="btn btn-primary">Submit Appoinment</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>