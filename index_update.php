<?php
$sel_query="select * from home_image_section where id=37";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	 $img1=$row['image1'];
	 $con1=$row['img1content'];
	 $link1=$row['img1link'];
	}



$sel_query="select * from home_image_section where id=41";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	 $img2=$row['image2'];
	 $con2=$row['img2content'];
	 $link2=$row['img2link'];
	}

$sel_query="select * from home_image_section where id=57";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	 $img3=$row['image3'];
	 $con3=$row['img3content'];
	 $link3=$row['img3link'];
	}

$sel_query="select * from home_image_section where id=58";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	 $img4=$row['image4'];
	 $con4=$row['img4content'];
	 $link4=$row['img4link'];//section end here
	}


	//slider starts
$sel_query="select * from home_slideimage where id=1";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	 $img_slide=$row['image'];
	 $cont1=$row['content1'];
	 $cont2=$row['content2'];
	 $cont3=$row['content2'];
	}//end


	//consultation section starts
$sel_query="select * from home_consultation where id=1";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	 $heading=$row['con_head'];
	 $text1=$row['content1'];
	 $text2=$row['content2'];
	}


?>