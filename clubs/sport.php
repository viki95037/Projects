<?php

$con=mysqli_connect("localhost","root","","clubs");
$sql="select * from club ";
$res=mysqli_query($con,$sql);
//echo $sql;
$results=array();
if($res)
{
	while($row=mysqli_fetch_assoc($res))
	{
		array_push($results,array('cid'=>$row['c_id'],
			'Name'=>$row['Name'],
			'imagelink'=>'http://192.168.0.102/clubs/image.php?cid='.$row['c_id'],
			'rating'=>$row['rating']

			));
	}
	echo json_encode(array('results'=>$results));
}


?>