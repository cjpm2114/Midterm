
<html>
    <head>
<style>
body{
	background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.7)), url(images/viewlist.jpg);
    background-size: 1920px 1071px;
    background-repeat: no-repeat;
}
table{
	position: relative;
	left: 180px;
	border-collapse: collapse;
	width: 80%;
	color: #b35340;
	font-family: monospace;
	font-size: 25px;
	text-align: center;
}
th{
	background-color: #051923;
	color: white;
	padding: 15px;
}
tr:nth-child(even){
    background: transparent;
    color: white;
    padding: 15px;
}
tr:nth-child(odd){
   	background: transparent;
   	color: white;
   	padding: 15px;
}
tr:hover{
	cursor:pointer;
	background: #ffffff26;
}
a{
	color: #fff;
	text-decoration: none;
}
button{
	position: relative;
	width: 170px;
    height: 35px;
    left: 10px;
    font-weight: bold;
	background: #051923;
	font-size: 15px;
	border-style: none;
	font-family: 'Quantico', sans-serif;
}
button:hover{
    color: #051923;
    background: #343a40;
    font-weight: bold;
	transition: 0.2s;
}
input{
    font-size: 15px;
}
h1{
	text-align: center;
	color: white;
	font-family: 'Quantico', sans-serif;
	font-weight: bold;
}
</style>
</head>
<body bgcolor="#EEFDEF">
	<button><a href="home.php" >Go back to Home</a></button>
	<h1>Activiy Log</h1>
<?php 
session_start();

if ( isset($_SESSION['username'])) {

 ?>
<?php
		$link_address = '#'; 
$conn = mysqli_connect("localhost", "root", "", "test_db");
		if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql2="SELECT id, username, activity, time FROM acts WHERE username='{$_SESSION['username']}'
ORDER BY time DESC;";
$result2 = $conn->query($sql2);
$sql1="SELECT id, username, activity, time FROM acts
ORDER BY time DESC;";
	$result = $conn->query($sql1);



		echo "<br/><h3></h3>";
		echo "<table>";
		
echo "<table border='3'>

<tr>

<th>Id</th>

<th>Username</th>

<th>Activity</th>

<th>Time</th>

</tr>";

if($_SESSION['username']==="ADMIN"){
	if ($result->num_rows > 0)
while($row = $result->fetch_assoc()) {

  echo "<tr>" ;
	echo  "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['username'] . "</td>";
	echo " <td>" . $row['activity'] . "</td>";
	echo " <td>" . $row['time'] . "</td>";
	"<tr";
 
}
}
	
else{
		if ($result2->num_rows > 0)
	while($row = $result2->fetch_assoc()) {

  echo "<tr>" ;
	echo  "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['username'] . "</td>";
	echo " <td>" . $row['activity'] . "</td>";
	echo " <td>" . $row['time'] . "</td>";
	"<tr";
 
}
}


		echo "</table>";

}
$conn->close();
?>