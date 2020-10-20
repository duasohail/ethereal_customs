<?php
include('../conn_db/conn.php');
/*if($conn){
	echo "success";
}else{
	echo "fail";
}*/

if(isset($_POST['add_img'])){

        $img1=$_FILES['img']['name'];
   		$tmp_img=$_FILES['img']['tmp_name'];

    	move_uploaded_file($tmp_img,"../images/$img1");
     	$insert="INSERT INTO shirts(image)values('$img1')";
    
    mysqli_query($conn,$insert);
    }/*end of section 1*/


?>