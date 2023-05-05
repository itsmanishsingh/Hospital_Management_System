<?php
session_start();
require 'database.php';
include 'navbar.php';

$data = mysqli_query($conn, "SELECT * FROM patient_details ");
$row = mysqli_num_rows($data);

?>
<div class="tableitems align-items-center container w-full">
    <h2 class="text-center mt-5">Patient list</h2>  
    <table border="3" class="table table-bordered border-success">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Prescription</th>

        </tr>

        <?php
        if ($row != 0) {
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<tr>
                    <td>" . $result['id'] . "</td>
                    <td>" . $result['name'] . "</td>
                    <td>" . $result['age'] . "</td>
                    <td>" . $result['prescription'] . "</td>
                    
                    </tr> ";
            }
        }

        ?>
    </table>
    <div class="align-center">
        <button class="btn btn-primary align-center">
            <a href="filterpatient.php" class="text-white center">Filter patient</a>
        </button>
    </div>
</div>
