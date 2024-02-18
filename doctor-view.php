<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 90vh;
    }
    
  </style>

    <title>Doctor View</title>
</head>
<body background="images/dash1.jpg" alt="damak hospital" style="width:100%; height:700px; margin:0;">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Doctor View Details 
                            <a href="index0.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $doctor_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM doctors WHERE id='$doctor_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $doctor = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Doctor Name</label>
                                        <p class="form-control">
                                            <?=$doctor['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Qualification</label>
                                        <p class="form-control">
                                            <?=$doctor['address'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Time</label>
                                        <p class="form-control">
                                            <?=$doctor['mobile'];?>
                                        </p>
                                    </div>
                                    

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>