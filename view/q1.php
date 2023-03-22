



<?php
$host="host=192.168.16.1";
$port="5432";
//"host=192.168.16.1";
$username="user=AG21";
$dbname="dbname=AG21";
$password="password=";

$conn=pg_connect("host=192.168.16.1 port=5432 dbname=AG21 user=AG21  password=");
if($conn)
	echo "connected<br>";
else 
	echo "not connected<br>";


 
	$fname=$_GET['fname'];
	$lname=$_GET['lname'];
	echo "$fname";
	echo "<br>";
	echo "$lname";
	echo "<br>";
	
	$query="INSERT into users values($u_fname,$u_lname)";
	$query_run=pg_query($conn,$query);
	
	if(!$query_run)
	{
         echo "invalid";
	 exit;
	}
	
	echo "First Name"."<br>";
	while($row=pg_fetch_assoc($query_run)){
		echo $row['u_fname'].""."<br>";	}
	echo "last Name"."<br>";
	while($row=pg_fetch_assoc($query_run)){
		echo $row['u_lname'].""."<br>";	
	}


/*else if($r==2)
{
	$movie_no=$_GET['movie_no'];
	$movie_name=$_GET['movie_name'];
	$release_year=$_GET['release_year'];
	$actor_no=$_GET['actor_no'];
	$actor_name=$_GET['actor_name'];
 	
	$result=pg_query("insert into movie values($movie_no,'$movie_name',$release_year)");
	$result1=pg_query("insert into actor value($actor_no,'$actor_name')");
	echo "value inserted";
}
*/
pg_close($conn);
?>
