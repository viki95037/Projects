<?php

$con=mysqli_connect("localhost","root","","clubs");
$cid=$_REQUEST['cid'];
$sql="select club_pic from club where c_id=$cid";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);

echo base64_encode($row[0]);


?>