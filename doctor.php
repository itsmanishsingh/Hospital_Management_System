<?php
session_start();
include 'navbar.php';
require 'database.php';

$data = mysqli_query($conn, "SELECT * FROM patient_details ");
$row = mysqli_num_rows($data);       // Gives the number of rows in the database

?>
<div class="tableitems align-items-center container w-full">

    <h2 class="text-center mt-5">Patient list</h2>
    <table border="3" cellspacing="5" class="table table-bordered border-success">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Prescription</th>
            <th>Operations</th>

        </tr>

        <?php
        if ($row != 0) {
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<tr>
                    <td>" . $result['id'] . "</td>
                    <td>" . $result['name'] . "</td>
                    <td>" . $result['age'] . "</td>
                    <td>" . $result['prescription'] . "</td>

                    <td><a href ='prescriptionUpdate.php?id=$result[id]'>
                    <input type= 'Submit' value = 'Update Prescription'></a>
                    <a href ='download.php?id=$result[id]'>
                    <input type= 'Submit' value = 'Download'></a></td> 
                    </tr> ";
            }
        }

        ?>
    </table>
</div>
