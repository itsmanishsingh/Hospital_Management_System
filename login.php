<?php
session_start();
require 'database.php';

if (isset($_POST["submit"])) {
    $useremail = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $useremail = stripslashes($useremail); 
    $password = stripslashes($password);
    $_SESSION['role'] = $role;
    $_SESSION['username'] = $useremail;
        
    if($role == 'receptionist'){
        $query1 = mysqli_query($conn, "SELECT * FROM ".$role." WHERE password ='$password' AND email ='$useremail' ");
        $data = mysqli_num_rows($query1);
        if($data>0){
            $_SESSION['role'] = $role;
            $_SESSION['username'] = $useremail;
            header("Location:patientprofileR1.php");
        }else{
            echo "<script>alert(Wrong Credentials !!!)</script>";
            header("Location:home.php");
        }
    }
    else if($role == "doctor"){
        $query1 = mysqli_query($conn, "SELECT * FROM doctor WHERE password ='$password' AND email ='$useremail' ");
        $data = mysqli_num_rows($query1);
        if($data>0){
            $_SESSION['role'] = $role;
            $_SESSION['username'] = $useremail;
            header("Location:doctor.php");
        }else{
            echo "Wrong Credentials !!!";
            header("Location:home.php");
        }
    }
    else if($role == "representative"){
        $query1 = mysqli_query($conn, "SELECT * FROM representative WHERE password ='$password' AND email ='$useremail' ");
        $data = mysqli_num_rows($query1);
        if($data>0){
            $_SESSION['role'] = $role;
            $_SESSION['username'] = $useremail;
            echo "you logged in ! Redirecting to the representative.php";
            header("Location:representative_profile.php");
        }else{
            echo "Wrong Credentials !!!";
            header("Location:home.php");
        }
    }else{
            echo "Wrong Email or Password!";
            header("Location:home.php");
    }

}
?>
