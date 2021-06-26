<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quantico&display=swap" rel="stylesheet">
    <title>Welcome</title>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background-image: url(images/wac.jpg);
    background-size: 1920px 1071px;
    background-repeat: no-repeat; 
    }
.page-header{
    position: relative;
    top: 320px;
    height: 200px;
    width: 550px;
    left: 680px;
}
h1{
    color: #ced4da;
    margin-left: 90px;
    font-family: 'Quantico', sans-serif;
    font-weight: bold;
    font-size: 50px;
}
a{
	position: relative;
	color: #adb5bd;
	text-decoration: none;
	font-family: 'Quantico', sans-serif;
	font-size: 30px; 
	left: 215px;
        }
a:hover{
    color: #ced4da;
    font-weight: bold;
	transition: 0.2s;
}
button{
	position: relative;
	top: 60px;
	right: 55px;
	width: 200px;
    height: 35px;
	background: transparent;
	font-size: 15px;
	border-style: none;
}
</style>
	<title>HOME</title>	
</head>
<body>

	<div class="page-header">
    	<h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
		<br>
   		<a href="logout.php" class="login">Logout</a>
   		<br>
		<button><a href="display.php">View Activity</a></button>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
?>                            		                            