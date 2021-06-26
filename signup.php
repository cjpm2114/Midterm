<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"test_db");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create an Account</title>
</head>
<body>
<style>
body{
	width: auto;
	height: auto;
	background: url(images/cia.jpg);
    background-repeat: no-repeat;
	font-family: 'Poppins', sans-serif;
}
h1{
	color: #fff;
}
.boxer{
    position: relative;
    top: 290px;
    height: 430px;
    width: 370px;
    left: 750px;
}
.form-group{
    position: relative;
    color: #fff;
    top: 30px;
    padding: 10px;
}
.form-control{
    position: relative;
    font-size: 20px;
    padding: 3px;
    width: 200px;
    border-radius: 5px;
    float: left;
    left: 150px;
    bottom: 5px;
}
a{
	position: relative;
	top: 80px;
	left: 130px;
	color: #fff;
	text-decoration: none;
	font-family: 'Quantico', sans-serif;
	font-weight: bold;
}
input{
    font-size: 15px;
}
label{
    position: relative;
    float: right;
    font-size: 20px;
    right: 220px;
    font-family: 'Quantico', sans-serif;
}
.login{
    color: #fff;
    background: transparent;
    position: relative;
    top: 60px;
    right: 105px;
    width: 150px;
    height: 35px;
    border-radius: 15px;
    font-family: 'Quantico', sans-serif;
}
.login:hover{
    color: #fff;
    background: #212529;
    font-weight: bold;
	transition: 0.2s;
}
.text{
    position:relative;
    color: #adb5bd;
    top: 350px;
    left: 610px;
    width: 850px;
}
</style>
<div class="boxer">
	<br>
	<center><h1>Sign Up</h1></center>

	<form action="#" method="post">
			<div class="form-group">
				<label>Agent ID</label>
				<input class="form-control" type="text" name="username" placeholder="Username" required= ""/>
			</div><br>
			<div class="form-group">
				<label>Email</label>
			<input class="form-control" type="email" name="email" placeholder="Email" required=""/>
			</div><br>
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="password" id="password" name="password" placeholder = "Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
			</div><br>
			<div class="form-group">
				<label>Re-Password</label>
				<input class="form-control" type="password" id="password1" name="password" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
			</div><br>
		
			<button class="login" type="submit" value="Submit" name = "submit">Submit</button>

	</form>	
		<a href="login.php">Sign in Instead</a>
</div>
<div class="text">
        <label style="font-size: 15px;"><center>You are entering in a secured United States Government system, which may be used only <br>for authorized purposes. Modification of any information on this system is subject <br>to a criminal prosecution. The agency monitors all usage of this system. <br>All persons are hereby notified that use of this system constitutes consent to such<br> monitoring and audition.</center></label>
</div> 
<?php

if(isset($_POST['submit'])){
	
	$uname=$_POST['username'];
	$pass=$_POST['password'];
	$email=$_POST['email'];

	$stmt="INSERT INTO users (username,password,email)VALUES('$uname','$pass','$email')";

	if(mysqli_query($link,$stmt)){
		header("Location: login.php");

	}else{
		echo "fail";
	}
}
?>

</body>
</html>