<html>
<head>
	<title> OTP </title>
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
    padding: 8px;
    font-weight: bold;
    width: 230px;
    border-radius: 5px;
    float: left;
    left: 130px;
    bottom: 30px;
    }
.form-control input{
    font-size: 30px;
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
</head>
<body>
	<form action="otpx.php" method="post">
	<div class="boxer">
		<h1>Enter</h1>
		<br><br><br>

        <?php if (isset($_GET['num1'])) { ?>
        <div class="form-group">
			<label>Restricted Code</label>
            <input class="form-control" type="text" 
                    name="num1" 
                    placeholder="Username"
                    value="<?php echo $_GET['num1']; ?>">
        </div><br>
        <?php }else{ ?>
        <div class="form-group">
			<label>Restricted Code</label>
            <input class="form-control" type="text" 
                    name="num1" 
                    placeholder="Enter your code, Agent!">
        </div><br>
        <?php }?>
			<input class="login" type="submit" value="Send">
			<button><a href="login.php">Sign in other account</a></button>
	</form>
		<?php ?> 
	</div>
</body>
</html>