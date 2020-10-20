<?php
include('conn_db/conn.php');
/*if($conn){
	echo "success";
}else{
	echo "fails";
}*/

$sel="select * from homefitting_cntnt where id=1";
$run=mysqli_query($conn,$sel);
while($row=mysqli_fetch_array($run)){
	$img=$row['sec1image'];
	$head=$row['sec1heading'];
	$para=$row['sec1paragraph'];
	$icon=$row['sec1icon'];
	$img1=$row['sec2image'];
	$head1=$row['sec2heading'];
	$para1=$row['sec2paragraph1'];
	$para2=$row['sec2paragraph2'];
	$img2=$row['sec3image'];
	$head2=$row['sec3hedaing'];
	$stp1=$row['step1'];
	$stp2=$row['step2'];
	$stp3=$row['step3'];
	$stp4=$row['step4'];
	$stp5=$row['step5'];
}

?>