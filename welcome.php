<?php
session_start();
session_destroy();
?>
<html>
<head>
</head>
<style>
.btn
{
	background-color:black;
	color:white;
	border:none;
	padding:5px;
	width:100px;	border-radius:2px 2px 2px 2px;
}
</style>
<body style=background-color:0fbaaf>
<center>
<h1>welcome  <?php echo $_SESSION['uname']; ?>! </h1><br>

<h3>Have a nice day.....</h3><br>
<a href="login.php"><input type="button" class="btn" name="logout" value="Logout"></a>
</center>

</body>
</html>

