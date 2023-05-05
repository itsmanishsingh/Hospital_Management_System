
<?php
session_start();
include 'navbar.php';
include 'database.php';
$id = $_GET['id'];
$_SESSION['id'] = $_GET['id'];
$query1 = mysqli_query($conn, "SELECT * FROM patient_details WHERE id ='$id'");
$data = mysqli_num_rows($query1);
$save = "";
if ($data != 0) {
    while ($row = mysqli_fetch_array($query1)) {
        $save .= "Id : " . $row['0'] . "\n";
        $save .= "Name : " . $row['1'] . "\n";
        $save .= "Age : " . $row['2'] . "\n";
        $save .= "Prescription : " . $row['3'] . "\n";
    }
} else {
    echo "NO record Found!!";
}
// $file = fopen("myfile.txt", "w");
$file = fopen("myfile.txt", "a");
fwrite($file, $save);
fclose($file);
header("Location:downloadPrescription.php");

?>


