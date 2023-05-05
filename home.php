<?php
session_start();
include 'navbar.php';
// Defining the respective error variables
$nameErr = $emailErr = $passwordErr = "";
$name = $email = $age ="";

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
    <title>Hospital home page</title>
</head>

<body>
    <h1 class="text-center">Welcome to Sadar Hospital</h1>
    <div class="container">

        <form action="login.php" method="post" class="form" onsubmit="return validateform()">
            <h2>Login as </h2>
            <label for="role">Select the role :</label>
            <select name="role" id="role">
                <option value="">--Select--</option>
                <option value="receptionist">Receptionist</option>
                <option value="doctor">Doctor</option>
                <option value="representative">Representative</option>
            </select>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <br>
            <button type="submit" name="submit" class="rounded-full bg-teal-300 px-6 p-2 mt-2">Login</button>

        </form>
    </div>
</body>
</html>