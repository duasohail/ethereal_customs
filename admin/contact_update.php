<?php 
include('../conn_db/conn.php');
/*if($conn){
	echo "sucess";
}else{
	echo "failed";
}*/

if(isset($_POST['upd_img'])){
	$image=$_FILES['img']['name'];

	$tmp_img=$_FILES['img']['tmp_name'];

    	move_uploaded_file($tmp_img,"../images/$image");
     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE contact_img SET title_image='$image' WHERE id=1";
    
    mysqli_query($conn,$update);
}


if(isset($_POST['upd_no'])){
		$no=$_POST['num'];
		$em=$_POST['email'];
     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE contact_appointment SET  cntct_number='$no' WHERE id=1";
    
    mysqli_query($conn,$update);
}

if(isset($_POST['upd_em'])){
		$em=$_POST['email'];
     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE contact_appointment SET   email='$em' WHERE id=1";
    
    mysqli_query($conn,$update);
}

?>