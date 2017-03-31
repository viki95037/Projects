<?php
$con=mysqli_connect("localhost","root","","clubs");

$cname=$_REQUEST['cname'];
$cuname=$_REQUEST['cuname'];
$addr=$_REQUEST['addr'];
$cesta=$_REQUEST['cesta'];
$contact=$_REQUEST['contact'];
$image=$_REQUEST['image'];
$imginblobform=base64_decode($image);
$sql="insert into student(st_name,phone,age,st_email,sp_name,st_pic) values('$cname',$contact,$addr,'$cuname','$cesta','".mysqli_real_escape_string($con,$imginblobform)."')";
$res=mysqli_query($con,$sql);
if($res)
	echo 'Success';
else
	echo mysqli_error($con);



?>