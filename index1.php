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
 

    <title>DAMAK HOSPITAL</title>
</head>
<body background="images/dash1.jpg" alt="damak hospital" style="width:100%; height:700px; margin:0;">

<?php  include 'include/navbar1.php' ?>

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container mt-4">
    

      

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Room Abailable...
                            <a href="room-create.php" class="btn btn-primary float-end">Add Room</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Building No</th>
                                    <th>Room NO</th>
                            
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM room";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $room)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $room['id']; ?></td>
                                                <td><?= $room['building']; ?></td>
                                                <td><?= $room['room']; ?></td>
                                                
                                    
                                                <td>
                                                 
                                                    <a href="room-edit.php?id=<?= $room['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code2.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_room" value="<?=$room['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
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
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>