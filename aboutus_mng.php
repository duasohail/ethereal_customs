<?php
include('conn_db/conn.php');
/*if($conn){
	echo "seccess";
}else{
	echo "fail";
}*/


$sel="select * from aboutus where id=1";
$run=mysqli_query($conn,$sel);
while($row=mysqli_fetch_array($run)){
	$img=$row['title_image'];
}


$sel="select * from aboutus where id=1";
$run=mysqli_query($conn,$sel);
while($row=mysqli_fetch_array($run)){
	$img1=$row['left_image'];
}

$sel="select * from aboutus where id=1";
$run=mysqli_query($conn,$sel);
while($row=mysqli_fetch_array($run)){
	$para1=$row['paragraph1'];
}

$sel="select * from aboutus where id=1";
$run=mysqli_query($conn,$sel);
while($row=mysqli_fetch_array($run)){
	$para2=$row['paragraph2'];
}


?>