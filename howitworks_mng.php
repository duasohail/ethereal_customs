<?php
include('conn_db/conn.php');
/*if($conn){
	echo "success";
}else{
	echo"fails";
}*/

$sel="select * from howitworks where id=1 ";
$run=mysqli_query($conn,$sel);
while($row=mysqli_fetch_array($run)){
	 $img=$row['background_img'];
	 $head1=$row['sec1heading'];
	 $para1=$row['sec1paragraph'];
	 $head2=$row['sec2heading'];
	 $para2=$row['sec2paragraph'];
	 $head3=$row['sec3heading'];
	 $para3=$row['sec3paragraph'];
	 $head4=$row['sec4heading'];
	 $para4=$row['sec4paragraph'];


	}

?>


