<?php
$conn=mysqli_connect("localhost","root","","website");
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql=("INSERT INTO register(fname,lname,uname,email,pass) values('".$fname."','".$lname."','".$uname."','".$email."','".$pass."')");
$query=mysqli_query($conn,$sql);

if($query)
{
echo "<script>alert('Registration Successfully')</script>";
}
else{
echo "<script>alert('Registration not Successfull')</script>";
}
}?>

<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
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
	padding:10px;
	font-size:11px;
	color:white;
	background:#0fbaaf;
	border:none;
	border-radius:3px;
	width:30%;

}
form .error {
  color: #ff0000;
}

</style>
<body>
<div class="group-content">
<h2>Registration</h2>
</div>
<form id="form" name="registration" method="POST" >
<div class="input-group">
<label>Firstname</label>
<input type="text" name="fname"id="fname" required><br>
</div>
<div class="input-group">
<label>Lastname</label>
<input type="text" name="lname" id="lname" required><br>
</div>
<div class="input-group">
<label>Username</label>
<input type="text" name="uname" id="uname" required><br>
</div>
<div class="input-group">
<label>Email-id</label>
<input type="text" name="email" id="email" required><br>
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="pass" id="pass" required><br>
</div>
<div class="input-group">
<center><button type="submit" name="submit" class="btn">Register</button><center>
</div>
Already member? <a href="login.php">SignIn</a>
</form>


<script type="text/javascript" >
$(document).ready(function()
{
 $("form[name='registration']").validate({
	 rules:
	 {
		 fname:{
			 required:true,
			 
	
		 },
		 lname:{
			 required:true,
			
		 },
		 uname:
		 {
			 required:true,
			 minlength:5
		 },
		 email:{
			 required:true,
		     email:true
		 },
		 pass:
		 {
			 required:true,
			 minlength:8
			 
		 }
	 },
	 messages:
	 {
		 fname:'Please enter the Firstname.',
		 lname:'Please enter the Lastname.',
		 uname:{
			 required:'Please enter the Username.',
			 minlength:'The length should be minimum 5 characters'


		 },
		 
		 email:{
			 required:'Please enter email address',
			 email:'Enter valid email address'
		 },
		 pass:{
			 required:'Please enter password.',
			 minlength:'The length should be minimum 8 characters'

			 
			 
	    }
    },
	 submitHandler:function(form)
	 {
		 form.submit();
	 }
 });
});
			 
</script>
</body>	 
	


</html>
	 
			 
	 
	 