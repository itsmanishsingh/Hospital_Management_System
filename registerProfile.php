<?php
require 'database.php';
include 'navbar.php';
session_start();

if(isset($_POST["submit"]) && $userprofile = $_SESSION['username']){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $prescription = $_POST["prescription"];

    $query = mysqli_query($conn , "INSERT INTO patient_details VALUES ('' ,'$name','$age','$prescription')");
    if($query){
        echo "<script> alert('Patient details registered Successfully');</script>";
        header("Location:patientprofileR1.php");
    }else{
        echo "<script> alert('Sorry Could not add the patient details');</script>";
        header("Location : patientprofileR1.php");
    }
}

?>
<?php
// Defining the respective error variables
$nameErr = $ageErr = $prescriptionErr = "";
$name = $age = $prescription= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Please enter a valid name";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-']*$/", $name)) {
            $nameErr = "Only letters and white spaces allowed";
        }
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Valid Email address";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "The email address is incorrect";
        }
    }

    if (empty($_POST["prescription"])) {
        $prescriptionErr = "Please enter a valid prescription";
    } else {
        $prescription = test_input($_POST["prescription"]);
        if (!preg_match("/^[a-zA-Z-']*$/", $prescription)) {
            $prescriptionErr = "Only letters and white spaces allowed";
        }
    }

    if(empty($_POST["age"])){
        $ageErr = "Please enter a valid age";
    }else{
        $age = test_input($_POST["age"]);
        if (!preg_match("/^[a-zA-Z-']*$/", $age)) {
            $ageErr = "Greater than 0 years allowed";
        }
    }

    
}
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
    <h3 class="text-center mt-2">New Patient Registration</h3>
    <div class="container">
        <form class="form" action="registerProfile.php" method="post" autocomplete="off">
            <label for="name">Name : </label>
            <input type="text" name="name" id="name" placeholder="Enter the Patient Name" required>
            <br>
            <label for="Age">Age : </label>
            <input type="text" name="age" id="age" placeholder="Patient Age" autocomplete="false" required>
            <br>
            <label for="Prescription">Prescription : </label>
            <input type="text" name="prescription" id="prescription" placeholder="Prescription" autocomplete="false" required>
            <br>
            <button type="submit" name="submit" class="rounded-full bg-teal-300 px-6 p-2 mt-2">Register</button>
            
            <br>
        </form>

    </div>
    
    <a href="login.php"></a>
</body>
</html>