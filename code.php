<html>
<head>
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
	color: #fff;
	text-decoration: none;
}
button{
	position: relative;
	top: 100px;
	right: 75px;
	width: 170px;
    height: 35px;
	background: transparent;
	font-size: 15px;
	border-style: none;
	font-family: 'Quantico', sans-serif;
	font-weight: bold;
}
button:hover{
    color: #fff;
    background: #212529;
    font-weight: bold;
	transition: 0.2s;
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
    top: 50px;
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
</style>
	<title>User Veriificaton</title>
</head>
<body>
	<form action="codex.php" method="post">
		<div class="boxer">
		
		<h2>Enter your Username</h2>
		<br><br><br>
			
          	<?php if (isset($_GET['uname'])) { ?>
          	<div class="form-group">
				<label>AGENT ID</label>
               	<input class="form-control"	type="text" 
                      	name="username" 
                      	placeholder="Username"
                      	value="<?php echo $_GET['uname']; ?>">
            </div><br>
          	<?php }else{ ?>
          	<div class="form-group">
				<label>AGENT ID</label>
               	<input class="form-control" type="text" 
                      	name="uname" 
                      	placeholder="Username">
            </div><br>
          	<?php }?>
				<input class="login" type="submit" value="Send">
				<button><a href="login.php">Sign in other account</a></button>
		</div>

	</form>

	<div class="text">
        <label style="font-size: 15px;"><center>You are entering in a secured United States Government system, which may be used only <br>for authorized purposes. Modification of any information on this system is subject <br>to a criminal prosecution. The agency monitors all usage of this system. <br>All persons are hereby notified that use of this system constitutes consent to such<br> monitoring and audition.</center></label>
    </div> 
			<?php ?> 		
		
</body>
</html>

