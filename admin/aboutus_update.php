<?php
include('../conn_db/conn.php');
/*if($conn){
    echo "connected";
}else{ echo "failed"; 
}*/


if(isset($_POST['upd_img'])){

        $img1=$_FILES['img']['name'];
   		$tmp_img=$_FILES['img']['tmp_name'];

    	move_uploaded_file($tmp_img,"../images/$img1");
     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE aboutus SET title_image='$img1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['upd_img1'])){

        $image=$_FILES['img1']['name'];
   		$tmp_img=$_FILES['img1']['tmp_name'];

    	move_uploaded_file($tmp_img,"../images/$image");
     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE aboutus SET left_image='$image' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['upd_pr1'])){

        $pr1=$_POST['para1'];

     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE aboutus SET paragraph1='$pr1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['upd_pr2'])){

        $pr2=$_POST['para2'];

     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE aboutus SET paragraph2='$pr2' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


?>