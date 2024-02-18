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
    <title>room create</title>
</head>
<body background="images/dash1.jpg" alt="damak hospital" style="width:100%; height:700px; margin:0;">


  
    <div class="container">

      

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ADD ROOM 
                            <a href="index1.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code2.php" method="POST">

                            <div class="mb-3">
                                <label>BUILDING NO</label>
                                <input type="text" name="building" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>ROOM NO</label>
                                <input type="text" name="room" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <button type="submit" name="save_room" class="btn btn-primary">Save Room</button>
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
