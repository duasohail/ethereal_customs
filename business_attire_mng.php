<?php
include('conn_db/conn.php');
/*if($conn){
	echo "success";
}else{
	echo "failed";
}
*/


$query="select * from business_attire_header where id=1 ";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run)){
	$img=$row['image'];
}


$query="select * from business_images where id=1 ";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run)){
	$img1=$row['image1'];
}

$query="select * from business_images where id=7 ";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run)){
	$img2=$row['image2'];
}

$query="select * from business_images where id=8 ";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run)){
	$img3=$row['image3'];
}

$query="select * from business_images where id=9 ";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run)){
	$img4=$row['image4'];
}

$query="select * from business_cntnt where id=1 ";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run)){
	$head=$row['heading'];
	$para1=$row['paragraph1'];
	$para2=$row['paragraph2'];
	$para3=$row['paragraph3'];
	$para4=$row['paragraph4'];
}

?>