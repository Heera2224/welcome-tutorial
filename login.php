<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/res.css">
</head>
<style>
body
{
font-size:20px;
background:white;
}
.group-content
{
	width:30%;
	margin:0px auto 0px;
    color:white;
	background:#0fbaaf;
	text-align:center;
	border:2px;
	border-bottom:none;
	border-radius:2px 4px 2px 4px;
	padding:10px;
}
form
{
	width:30%;
	margin:0px auto;
	padding:10px;
	border:1px solid grey;
	background:white;
	border-radius:4px 4px 4px 4px;
}
.input-group
{
	margin:10px 0px 10px 0px;
}
.input-group label{
	display:block;
	text-align:left;
	margin:left;
}
.input-group input{
	height:10px;
	width:100%;
	padding:12px 10px;
	font-size:14px;
	border-radius:2px;
	border:1px solid grey;
	background:white;
}
.btn
{
	padding:10px ;
	font-size:14px;
	color:white;
	background:#0fbaaf;
	border:none;
	border-radius:2px;
	width:25%;
}

</style>
<body>
<div class="group-content">
<h2>Login</h2>
</div>
<form id="form" name="login" method="POST"  >
<div class="input-group">
<label>Username</label>
<input type="text" name="uname"id="uname"><br>
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="pass" id="pass"><br>
</div>
<div class="input-group">
<center><button type="submit" name="submit" class="btn">Login</button></center>
</div>
Not yet account? <a href="register.php">SignUp</a>
</form>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$conn=mysqli_connect("localhost","root","","website");
$sql=("select * from register where uname='".$uname."' AND pass='".$pass."'");
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_array($query);
if($result>1)
{
$_SESSION['uname']=$_POST['uname'];
header("location:welcome.php");

}
else
{
echo "<script>alert('Username and Password does not match')</script>";
}
}

?>
