<?php
$con=mysqli_connect("localhost","root","","clubs");
$sid=$_REQUEST['sid'];
$cname=$_REQUEST['cname'];
$cuname=$_REQUEST['cuname'];
$addr=$_REQUEST['addr'];
$cesta=$_REQUEST['cesta'];
$contact=$_REQUEST['contact'];
$link=$_REQUEST['link'];
$image=$_REQUEST['image'];
$exp=$_REQUEST['exp'];
$stud=strlen($link);
$sname=$_REQUEST['sname'];
$imginblobform=base64_decode($image);
$sql="insert into coach(c_name,phone,email,description,experiance,coach_pic,stud_enroll,sports_name) values('$cname',$contact,'$cesta','$cuname',$exp,'".mysqli_real_escape_string($con,$imginblobform)."',$stud,'$sname')";
$res=mysqli_query($con,$sql);
if($res)
	echo 'Success';
else
	echo mysqli_error($con);


?>