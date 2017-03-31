<?php

$con=mysqli_connect("localhost","root","","clubs");
$cid=$_REQUEST['sid'];
$sql="select s_pic from sports where s_id=$cid";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);

echo base64_encode($row[0]);


?>