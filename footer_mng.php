<?php
include('conn_db/conn.php');
/*if($conn){
	echo "sucess";

}else{
	echo "failed";
}*/



//workdays strt
$run="select * from footer_wrkdays where id=1";
$sel=mysqli_query($conn,$run);
while($row=mysqli_fetch_array($sel)){
	$days=$row['work_days'];
}//end




//footer social links
$run="select * from footer_social_links where id=1";
$sel=mysqli_query($conn,$run);
while($row=mysqli_fetch_array($sel)){
	$fcbk=$row['facebook'];
	$instagram=$row['insta'];
}//ends



//footer location
$run="select * from footer_location where id=1";
$sel=mysqli_query($conn,$run);
while($row=mysqli_fetch_array($sel)){
	$add1=$row['address1'];
	$add2=$row['address2'];
}//ends


	?>