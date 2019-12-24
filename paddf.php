<?php include 'header.php'; ?>
<!doctype html>
<html>
<style>
<head>
pre{
	position: relative;
	left: 100px;
}
*{
	font-family: Raleway;
}
body{
            background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url(images/cover.jpg);
            background-position: center;
            background-size: cover;
            height: 100vh;
            color: white;
            align-content: center;
            margin:0;
            padding:0;
        }
form{
	
}
.submit{
	background-color: gray;
	color: white;
	border: 0;
	font-size: 1.2em;
	border-radius: 15px;
	padding: 10px 10px 10px 10px;
}
</style>
</head>
<body>


<pre>
<form action="padd.php" method="POST">

Patient ID: <input type="text" name="Id"><br>
Patient Name: <input type="text" name="Name"><br><br>
Phone Number: <input type="text" name="Phone"><br><br>
Disease Name: <input type="text" name="Address"><br>

<input class="submit" onclick="myFunction()" type="submit" value="Submit">
</form>
</pre>
<script>
function myFunction() {
  massage("Hello\nHow are you?");
}
</script>

</body>
</html>