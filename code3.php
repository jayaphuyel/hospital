<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_appoi']))
{
    $appoi_id = mysqli_real_escape_string($con, $_POST['delete_appoi']);

    $query = "DELETE FROM appoi WHERE id='$appoi_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Appointment Deleted Successfully";
        header("Location: index4.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Appointment Not Deleted";
        header("Location: index4.php");
        exit(0);
    }
}

if(isset($_POST['save_appoi']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $dname = mysqli_real_escape_string($con, $_POST['dname']);
    $dquali = mysqli_real_escape_string($con, $_POST['dquali']);


    $query = "INSERT INTO appoi (name,address,mobile,dname,dquali) VALUES ('$name','$address','$mobile','$dname','$dquali')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Appoinment Taken Successfully";
        header("Location: appointment.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Appoinment Not Created";
        header("Location: appointment.php");
        exit(0);
    }
}
?>