<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
<style>
body{
	width: auto;
	height: auto;
	background: url(images/cia.jpg);
    background-repeat: no-repeat;
	font-family: 'Poppins', sans-serif;
}
h2{
	color: #fff;
}
.boxer{
    position: relative;
    top: 290px;
    height: 400px;
    width: 380px;
    left: 745px;
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
    left: 160px;
    bottom: 5px;
}
a{
	position: relative;
	top: 60px;
	left: 125px;
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
    top: 40px;
    left: 110px;
    width: 150px;
    height: 35px;
    border-radius: 15px;
    font-family: sans-serif;
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
	font-size: 15px;
	text-align: center;
}
.success{
	position: relative;
	color: #fff;
	font-size: 15px;
	text-align: center;
}
</style>
</head>
<body>
	<div class="boxer">
	    <form action="foxcheck.php" method="post">
	    	<br>
	    <center><p><h2>FORGOT PASSWORD</h2></p></center>

	     	<?php if (isset($_GET['error'])) { ?>
	     		<p class="error"><?php echo $_GET['error']; ?></p>
	     	<?php } ?>

	        <?php if (isset($_GET['success'])) { ?>
	            <p class="success"><?php echo $_GET['success']; ?></p>
	        <?php } ?>

	        <?php if (isset($_GET['uname'])) { ?>
	        <div class="form-group">
	        	<label>Agent ID</label>
	            <input class="form-control" type="text" 
	                   name="username" 
	                   placeholder=" Username"
	                   value="<?php echo $_GET['uname']; ?>">
	        </div><br>
	    	<?php }else{ ?>

	        <div class="form-group">
	        	<label>Agent ID</label>
	            <input class="form-control" type="text" 
	                   name="uname" 
	                   placeholder=" Username">
	        </div><br>
	    	<?php }?>
	        
	        <div class="form-group">
	        	<label>New Password</label>
	     		<input class="form-control" type="password" 
	                   name="password" 
	                   placeholder=" Password">
	        </div><br>
	        <div class="form-group">
	        	<label>Re-Password</label>
	          	<input class="form-control" type="password" 
	                   name="re_password" 
	                   placeholder=" Confirm Password">
	        </div><br><br>
	     		<input class="login" type="submit" value="Update Password">
	     		
				
	    </form>
	    <a href="index.php" class="ca">Sign in Instead</a>
 	</div>
 	<div class="text">
        <label style="font-size: 15px;"><center>You are entering in a secured United States Government system, which may be used only <br>for authorized purposes. Modification of any information on this system is subject <br>to a criminal prosecution. The agency monitors all usage of this system. <br>All persons are hereby notified that use of this system constitutes consent to such<br> monitoring and audition.</center></label>
	</div> 
</body>
</html>