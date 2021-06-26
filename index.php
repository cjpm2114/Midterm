<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
<style>
body{
	width: auto;
	height: auto;
	background: url(images/cia.jpg);
    background-repeat: no-repeat;
	font-family: 'Poppins', sans-serif;
}
.boxer{
    position: relative;
    top: 290px;
    height: 400px;
    width: 350px;
    left: 770px;
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
    left: 130px;
    bottom: 5px;
}
a{
	position: relative;
	left: 35px;
	color: #fff;
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
    top: 20px;
    left: 90px;
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
    top: 380px;
    left: 610px;
    width: 850px;
}
.error{
	position: relative;
	color: #fff;
	left: 50px;
	font-size: 25px;
}
</style>
</head>
<body>

    <form action="login.php" method="post">
     	<div class="boxer">

        <br>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		<div class="form-group">
			<label>AGENT ID</label>
     		<input type="text" name="uname" class="form-control" placeholder="Username"><br>
     	</div>
     	<div class="form-group">
     		<label>PASSWORD</label>
     		<input type="password" name="password" class="form-control" placeholder="Password"><br>
        </div>
        <div class="form-group">
        	<input type="submit" class="login" value="Login">
		</div><br><br><br>
		<a href="changpass.php" class="ca">Forgot Password</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="signup.php" class="ca">Create Account</a><br><br>
		</div>
    </form>

    <div class="text">
        <label style="font-size: 15px;"><center>You are entering in a secured United States Government system, which may be used only <br>for authorized purposes. Modification of any information on this system is subject <br>to a criminal prosecution. The agency monitors all usage of this system. <br>All persons are hereby notified that use of this system constitutes consent to such<br> monitoring and audition.</center></label>
    </div> 
</body>
</html>