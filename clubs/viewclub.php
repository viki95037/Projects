	<?php

$con=mysqli_connect("localhost","root","","clubs");
$cid=$_REQUEST['cid'];
$sql="select * from club where c_id=$cid";
$res=mysqli_query($con,$sql);
//echo $sql;
$results=array();
if($res)
{
	while($row=mysqli_fetch_assoc($res))
	{
		$sqlq="select s_name from sports where s_id IN (select s_id from sport where c_id=$cid)";
		$resul=mysqli_query($con,$sqlq);
		$sport=array();
		while($rows=mysqli_fetch_assoc($resul))
		{
			array_push($sport,array('sportname'=>$rows['s_name']));
		}
		array_push($results,array('cid'=>$row['c_id'],
			'Name'=>$row['Name'],
			'desc'=>$row['Desc_c'],
			'addr'=>$row['address'],
			'imagelink'=>'http://192.168.0.102/clubs/image.php?cid='.$row['c_id'],
			'contact'=>$row['phone'],
			'sports'=>$sport
			));
	}
	echo json_encode(array('results'=>$results));
}


?>