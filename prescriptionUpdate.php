<?php
require 'database.php';
include 'navbar.php';
session_start();
$id = $_GET['id'];
$_SESSION['id'] = $_GET['id'];
$data = mysqli_query($conn, "SELECT *  FROM patient_details where id = '$id'");
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
    <h2 class="text-center mt-5">Prescription Update</h2>
    <div class="container align-items-center container w-full">
        <form action="updatedPrescription.php" method="post" autocomplete="off" class="form">
            <label for="Prescription">Prescription : </label>
            <input type="text" name="prescription" id="prescription" value="<?php echo $result['prescription'];?>" placeholder="Prescription" autocomplete="false" required>
            <br>                                                     
            <button type="submit" name="update" class="rounded-full bg-teal-300 px-6 p-2 mt-2">Update</button>
            <br>
        </form>
    </div>

    <a href="login.php"></a>
</body>

</html>

