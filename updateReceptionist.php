<?php
require 'database.php';
include 'navbar.php';
session_start();
$id = $_GET['id'];
$_SESSION['id'] = $_GET['id'];
$data = mysqli_query($conn, "SELECT name , age  FROM patient_details where id = '$id'");
$row = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Update Details</title>
</head>

<body>
    <h2 class="text-center ">Update Patient record</h2>
    <div class="container container align-items-center container w-full">
        <form action="updatedProfile.php" method="post" autocomplete="off" class="form">
            <label for="name">Name : </label>
            <input type="text" name="name" id="name" value="<?php echo $result['name']; ?>" placeholder="Enter the Patient Name" required>
            <br>
            <label for="Age">Age : </label>
            <input type="text" name="age" id="age" value="<?php echo $result['age']; ?>" placeholder="Patient Age" autocomplete="false" required>
            <br>
            <button type="submit" name="update">Update</button>

            <br>
        </form>

    </div>

    <a href="login.php"></a>
    <button class="align-right btn btn-primary">
        <a href="logout.php" class="text-white align-right">Logout</a>
    </button>
</body>

</html>