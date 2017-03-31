<?php

$con=mysqli_connect("localhost","root","","clubs");
$cid=$_REQUEST['sid'];
$sql="select coach_pic from coach where co_id=$cid";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);

echo base64_encode($row[0]);


?>