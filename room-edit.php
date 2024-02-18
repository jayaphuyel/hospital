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
    <style>
    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 100vh;
    }
    
  </style>

    <title>Room Edit</title>
</head>
<body background="images/dash1.jpg" alt="damak hospital" style="width:100%; height:700px; margin:0;">


  
    <div class="container">



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Room Edit 
                            <a href="index1.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $room_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM room WHERE id='$room_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $room = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code2.php" method="POST">
                                    <input type="hidden" name="room_id" value="<?= $room['id']; ?>">

                                    <div class="mb-3">
                                        <label>Building no</label>
                                        <input type="text" name="building" value="<?=$room['building'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Room no</label>
                                        <input type="text" name="room" value="<?=$room['room'];?>" class="form-control">
                                    </div>
                                   
                                  
                                    <div class="mb-3">
                                        <button type="submit" name="update_room" class="btn btn-primary">
                                            Update room
                                        </button>
                                    </div>

                                </form>
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