<?php
include('conn_db/conn.php');
/*if($conn){
	echo "sucess";
}else{
	echo "fail ";
}*/

$sel_query="select * from wedding_header_img where id=1 ";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	 $img=$row['image'];
	}


$sel_query="select * from wedding_images where id=2 ";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	 $img1=$row['image1'];
	}


$sel_query="select * from wedding_images where id=4 ";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	 $img2=$row['image2'];
	}


$sel_query="select * from wedding_images where id=5 ";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	 $img3=$row['image3'];
	}

$sel_query="select * from wedding_images where id=6 ";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	 $img4=$row['image4'];
	}

$sel_query="select * from wedding_images where id=7 ";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	 $img5=$row['image5'];
	}


$sel_query="select * from wedding_content where id=1 ";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	 $head=$row['heading'];
	 $pr1=$row['paragraph1'];
	 $pr2=$row['paragraph2'];
	 $pr3=$row['paragraph3'];
	 
	}


?>