<?php
session_start();
include 'navbar.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Filter page</title>
</head>

<body>
    <h2 class="text-center mt-5">Filter the patient based on the Name</h2>
    <div class="container align-items-center container w-full">
        <form action="filteredPatient.php" method="post" class="form">
            <label for="filter">Enter the Patient Details : </label>
            <input type="text" name="patientName" placeholder="Enter the patient name" required>
            <button type="submit" name="filter" class="rounded-full bg-teal-300 px-6 p-2 mt-2">Filter</button>
        </form>
    </div>
</body>

</html>