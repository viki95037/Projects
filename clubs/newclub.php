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
$image2=$_REQUEST['image1'];
$imginblobform=base64_decode($image);
$img=base64_decode($image2);
$sql="insert into club(Name,address,phone,website,club_pic,slot_pic,rating,username) values('$cname','$addr',$contact,'$link','".mysqli_real_escape_string($con,$imginblobform)."','".mysqli_real_escape_string($con,$img)."',0,'$cuname')";
$res=mysqli_query($con,$sql);
if($res)
{
	$sqlq="select c_id from club order by c_id desc limit 1";
	$results=mysqli_query($con,$sqlq);
	$row=mysqli_fetch_array($results);
	$cid=$row['c_id'];
	$sqlq="insert into sport(c_id,s_id) values($cid,$sid) ";
	//echo $sqlq;
	$result=mysqli_query($con,$sqlq);
	if($result)
		echo 'Success';
	else
		echo 'Failure at';
}
else
	echo 'Failure here';



?>
