<?php include 'header.php'; ?>

<?php include 'db/conf.php'; ?>

<?php include 'db/db.php'; ?>

<!doctype html>
<html>
<style>
pre{
text-align:center;
}
body{
            background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url(https://cdn3.vectorstock.com/i/1000x1000/66/77/cartoon-street-hospital-stylish-background-retro-vector-11546677.jpg);
            background-position: center;
            background-size: cover;
            height: 100vh;
            color: white;
            align-content: center;
            margin:0;
            padding:0;
        }

</style>
</head>
<body>


<pre>
<form action="update.php" method="POST">

ID:<input type="text" name="Id" value="<?php echo $id;?>"><br>
Patient Name:<input type="text" name="Name"><br><br>
Phone:<input type="text" name="Phone"><br><br>
Deasese:<input type="text" name="Address"><br>

<input type="submit" value="submit">
</form>
</pre>

</body>
</html>