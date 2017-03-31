<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "clubs";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$pid=$_POST['pid'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$sqls="SELECT * FROM fdetails where PID='$pid'";
	$results = $conn->query($sqls);
	if ($results->num_rows == 1) {
		echo 'Already registered';
	}
	else{
	$sql="INSERT INTO fdetails(pid,name,email,contact) values ('$pid','$name','$email','$contact')";
	$result=mysqli_query($conn,$sql);
	if($result)
{		echo 'sucess';
	}
	else{
		echo 'not sucess';
	}
}
