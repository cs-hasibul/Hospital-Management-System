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

$sql =  " update doctor set Id = '$_POST[Id]',Name = '$_POST[Name]',Phone = '$_POST[Phone]',Type= '$_POST[Type]' where Id = '$_POST[Id]'" ;

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>