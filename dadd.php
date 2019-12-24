<?php
header("Location: dinfor.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurent";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: ");
}
echo "successfully";

$sql="INSERT INTO doctor(Id, Name ,Phone,Type)VALUES('$_POST[Id]','$_POST[Name]','$_POST[Phone]','$_POST[Type]')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>