<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtered Patient</title>
</head>

<body>
<h2 class="text-center m-5">List of Patients</h2>
<div class="tableitems align-items-center container w-full">
    <table border="4" cellspacing="3" class="table table-bordered border-success">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>age</th>
            <th>Prescription</th>
        </tr>

        <?php
        session_start();
        include 'database.php';
        
        if (isset($_POST['filter'])&& $userprofile = $_SESSION['username']) {
            $patientName = $_POST['patientName'];
            $_SESSION['patientName'] = $patientName;
            $query1 = mysqli_query($conn, "SELECT * FROM patient_details WHERE name ='$patientName'");
            $data = mysqli_num_rows($query1);
            if ($data != 0) {
                while ($row = mysqli_fetch_array($query1)) {

        ?>
                    <tr>
                        <td><?php echo $row['id']; ?>
                        </td>
                        <td><?php echo $row['name']; ?>
                        </td>
                        <td><?php echo $row['age']; ?>
                        </td>
                        <td><?php echo $row['prescription']; ?>
                        </td>

                    </tr>
        <?php

                }
            } else {
                echo "NO record Found!!";
            }
        }

        ?>
    </table>
    </div>
    <?php

    ?>
</body>

</html>


