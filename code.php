<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_doctor']))
{
    $doctor_id = mysqli_real_escape_string($con, $_POST['delete_doctor']);

    $query = "DELETE FROM doctors WHERE id='$doctor_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "doctor Deleted Successfully";
        header("Location: index0.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "doctor Not Deleted";
        header("Location: index0.php");
        exit(0);
    }
}

if(isset($_POST['update_doctor']))
{
    $doctor_id = mysqli_real_escape_string($con, $_POST['doctor_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
   

    $query = "UPDATE doctors SET name='$name', address='$address', mobile='$mobile' WHERE id='$doctor_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "doctor Updated Successfully";
        header("Location: index0.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "doctor Not Updated";
        header("Location: index0.php");
        exit(0);
    }

}


if(isset($_POST['save_doctor']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);


    $query = "INSERT INTO doctors (name,address,mobile) VALUES ('$name','$address','$mobile')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "doctors Created Successfully";
        header("Location: doctor-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "doctors Not Created";
        header("Location: doctor-create.php");
        exit(0);
    }
}

?>