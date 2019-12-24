<?php
		include "db/conf.php";
		include "db/db.php";
		$db = new Database();
		include "db/session.php";
		Session::checkLogin();

		if($_SERVER["REQUEST_METHOD"] == "POST"){
        $userName = $_POST["userName"];
        $pass = md5($_POST["pass"]);
        $query = "SELECT * FROM empl_account WHERE `empl_user_name`='$userName' and `empl_pass`='$pass'";
        $result = $db->select($query);
        if ($result == true) {
            $value = $result->fetch_assoc(); 
            Session::set("login", true);
            header("Location: home.php");
        }else{
        	header("Location: login.php?msg='Wrong information!'");
        }
    }

?>
<!DOCTYPE html>
<html>
	<head>
		<title>LogIn</title>
		
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<form action="login.php" method="POST">
				<div class="login">
			
					<h1 >Log In</h1><br><br>
					<b>User Name </b><br>
					<input class="us" type="text" name="userName"><br>
					
					  <b>Password </b><br>
					<input class="pass" type="password" name="pass"><br>
					<button type="submit" class="sub">Submit</button>
			    </div>
		</form>
		<?php
			if(isset($_GET["msg"])){
				$msg = $_GET["msg"];
		?>
		<script type="text/javascript">
			window.alert(<?php echo $msg;?>);
		</script>
		<?php
			}
		?>

	</body>
</html>