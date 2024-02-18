<?php
    session_start();
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 100vh;
    }
    
  </style>
 

    <title>DAMAK HOSPITAL</title>
</head>
<body background="images/dash1.jpg" alt="damak hospital" style="width:100%; height:700px; margin:0;">

   
<?php  include 'include/navbar.php' ?>


    <div class="container">
    

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Doctor Available....
                            <a href="appointment.php" class="btn btn-primary float-end">Take Appointment</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Doctor Name</th>
                                    <th>Qualification</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM doctors";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $doctor)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $doctor['id']; ?></td>
                                                <td><?= $doctor['name']; ?></td>
                                                <td><?= $doctor['address']; ?></td>
                                                <td><?= $doctor['mobile']; ?></td>
                                    
                                             
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

      

                    </div>
                    
                </div>
            </div>
        </div>
        <p><h2 style="color:white; font-size:25px;">You can also call us for Doctor Appointment. </p>
     
      <a href="tel:009779807990301">
        <button style="display: inline-block; padding: 10px 20px; margin: 10px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer; color: #fff; background-color: #007bff;" 
        onmouseover="this.style.backgroundColor='green'" 
        onmouseout="this.style.backgroundColor='#007bff'">
            Call now
        </button>
    </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>




  
    