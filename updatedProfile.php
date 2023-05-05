<?php
require 'database.php';
session_start();
if(isset($_POST["update"])){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $prescription = $_POST["prescription"];
    $id = $_SESSION['id'];

    $query = mysqli_query($conn , "UPDATE patient_details SET name='$name', age = '$age' WHERE id='$id' ");
    if($query){
        echo "<script> alert('Patient details Updated')</script>";
        header("Location:patientprofileR1.php");
    }else{  
        echo "<script> alert('Sorry Could not update the details')</script>";
        header("Location : receptionist.php");
    }
}

?>