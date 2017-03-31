<?php
$con=mysqli_connect("localhost","root","","clubs");
$sql="select * from sports ";
$res=mysqli_query($con,$sql);
//echo $sql;
$results=array();
if($res)
{
	while($row=mysqli_fetch_assoc($res))
	{
		array_push($results,array('cid'=>$row['s_id'],
			'Name'=>$row['s_name'],
			'imagelink'=>'http://192.168.0.102/clubs/img.php?sid='.$row['s_id'],
			'rating'=>5

			));
	}
	echo json_encode(array('results'=>$results));
}



?>