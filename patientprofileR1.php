<?php
session_start();
require 'database.php';
include 'navbar.php';

$data = mysqli_query($conn, "SELECT * FROM patient_details ");
$row = mysqli_num_rows($data);       

?>
<h2 class="text-center">Patient List</h2>
<div class="tableitems align-items-center container w-full">

    <table border="5" cellspacing="9" class="table table-bordered border-success">
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

                    <td><a href ='updateReceptionist.php?id=$result[id]'>
                    <input type= 'Submit' value = 'update'></a>
                    <a href ='delete.php?id=$result[id]'>
                    <input type= 'Submit' value ='delete' onclick = 'return confirmdelete()'></a> 
                    <button><a href ='download.php?id=$result[id]'>download</a></button>
                     </td>
                    
                    </tr> ";
            }
        }
        
        ?>
    </table>
    <div class="align-center">
        <button class="btn btn-primary">
            <a href="registerProfile.php" class="text-white">New Patient</a>
        </button>
        <button class="btn btn-primary">
            <a href="logout.php" class="text-white">Logout</a>
        </button>
        
    </div>
</div>

<script>
    function confirmdelete() {
        return confirm(`Are you sure you want to delete !`);
    }
</script>