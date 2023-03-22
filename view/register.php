<?php
$host="host=192.168.16.1";
$username="user=AG21";
$dbname="dbname=AG21";
$password="password=";

$conn=pg_connect("$host $username $dbname $password");

if(isset($_POST['submit'])&&empty($_POST['submit'])){
	
 
	$sql= "insert into user1(id,name,email,password)values('".$_POST['userid']."','".$_POST['name']."','".$_POST['email']."','".md5($_POST['pwd']."';");
	$ret = pg_query($dbconn,$sql);
	
	if($ret===false)
		echo pg_last_error();
	if($ret){
		echo"Data saved successfully";
	}
	else{
		echo"Something went wrong" ;
	}
}
?>
<html>
	<head>
		<title>Register</title>
		
	</head>
<body>
	<div class="content">
		<div class="form">
		    <h2>Register</h2>
		    <form method="POST" action="register.php">
			<label for="name">Name:</label>
			<input type="text" name="userid" id="name" placeholder="Enter id" required>
			<input type="text" name="name" id="name" placeholder="Enter name" required>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" placeholder="Email" required>
			<label for="name">Password:</label>
                   	<input type="password" id="pwd" name="pwd" placeholder="Password">
       	             	<input type="submit" name="submit" value="Submit">
		    </form>
		</div>
	</div>
</body>
</html>
