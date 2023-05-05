<?php
session_start();
require 'database.php';
if (isset($_POST["submit"]) && $_SESSION['username'] = $useremail) {
    $_SESSION['role'] = $role;
    $data = mysqli_query($conn, "SELECT * FROM patient_details ");
    $row = mysqli_num_rows($data); 

?>
    <div class="align-items-center">

        <h2>Patient list</h2>
        <table border="3" cellspacing="5">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Prescription</th>
                <th>Update</th>
                <th>Delete</th>

            </tr>

        <?php
        if ($row != 0) {
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<tr>
                    <td>" . $result['id'] . "</td>
                    <td>" . $result['name'] . "</td>
                    <td>" . $result['age'] . "</td>
                    <td>" . $result['prescription'] . "</td>
                    <td>" . $result['prescription'] . "</td>
                    </tr> ";
            }
        }
    }
   
        ?>
        </table>
    </div>