<?php
include("database.php");

$userprofile = $_SESSION['username'];
$id = $_GET['id'];
$data = mysqli_query($conn, "DELETE FROM patient_details where id ='$id' ");

if($data){
    echo "<script> alert('Patient Record Deleted')</script>";
    header("Location:patientprofile.php");
}else{  
    echo "<script> alert('Sorry Could not delete the patient details')</script>";
    header("Location : patientprofile.php");
}
?>