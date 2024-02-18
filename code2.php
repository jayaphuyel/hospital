<?php
session_start();
require 'dbcon.php';


if(isset($_POST['delete_room']))
{
    $room_id = mysqli_real_escape_string($con, $_POST['delete_room']);

    $query = "DELETE FROM room WHERE id='$room_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "room Deleted Successfully";
        header("Location: index1.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "room Not Deleted";
        header("Location: index1.php");
        exit(0);
    }
}

if(isset($_POST['update_room']))
{
    $room_id = mysqli_real_escape_string($con, $_POST['room_id']);

    $building = mysqli_real_escape_string($con, $_POST['building']);
    $room = mysqli_real_escape_string($con, $_POST['room']);
  

    $query = "UPDATE room SET building='$building', room='$room' WHERE id='$room_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "room Updated Successfully";
        header("Location: index1.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "room Not Updated";
        header("Location: index1.php");
        exit(0);
    }

}


if(isset($_POST['save_room']))
{
 
    $building = mysqli_real_escape_string($con, $_POST['building']);
    $room = mysqli_real_escape_string($con, $_POST['room']);


    $query = "INSERT INTO room (building,room) VALUES ('$building','$room')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "room Created Successfully";
        header("Location: room-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "room Not Created";
        header("Location: room-create.php");
        exit(0);
    }
}

?>