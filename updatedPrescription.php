<?php
require 'database.php';
session_start();

if(isset($_POST["update"])){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $prescription = $_POST["prescription"];

    $id = $_SESSION['id'];

    $query = mysqli_query($conn , "UPDATE patient_details SET prescription = '$prescription' WHERE id='$id' ");
    if($query){
        echo "<script> alert('Patient details Updated')</script>";
        header("Location:doctor.php");
    }else{  
        echo "<script> alert('Sorry Could not update the details')</script>";
        header("Location : updateReceptionist.php");
    }
}

?>