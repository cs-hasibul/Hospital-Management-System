


<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "restaurent";

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["id"];
$sql="DELETE FROM patient WHERE patient.Id='$id'";
if ($conn->query($sql) == TRUE) {
    header('Location: pinfor.php');
} else {
         echo "<center><h2>Problem To DELETE</h2></center>";
}

?>
