<?php
include('../conn_db/conn.php');
/*if($conn){
	echo "sucess";
}else{
	echo "failed";
}*/

if(isset($_POST['bigtall_header'])){

        $img1=$_FILES['image']['name'];
   		$tmp_img=$_FILES['image']['tmp_name'];

    	move_uploaded_file($tmp_img,"../images/$img1");
     	//$update="INSERT INTO bigandtall_header(image)values('$img1')";
        $update="UPDATE bigandtall_header SET image='$img1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/




if(isset($_POST['bigtall_upd1'])){

        $img=$_FILES['image1']['name'];
   		$tmp_img=$_FILES['image1']['tmp_name'];

    	move_uploaded_file($tmp_img,"../images/$img");
     	//$update="INSERT INTO bigandtall_images(image1)values('$img')";
        $update="UPDATE bigandtall_images SET image1='$img' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['bigtall_upd2'])){

        $img=$_FILES['image2']['name'];
   		$tmp_img=$_FILES['image2']['tmp_name'];

    	move_uploaded_file($tmp_img,"../images/$img");
     	//$update="INSERT INTO bigandtall_images(image2)values('$img')";
        $update="UPDATE bigandtall_images SET image2='$img' WHERE id=5";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['bigtall_upd3'])){

        $img=$_FILES['image3']['name'];
   		$tmp_img=$_FILES['image3']['tmp_name'];

    	move_uploaded_file($tmp_img,"../images/$img");
     	//$update="INSERT INTO bigandtall_images(image3)values('$img')";
        $update="UPDATE bigandtall_images SET image3='$img' WHERE id=6";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['bigtall_upd4'])){

        $img=$_FILES['image4']['name'];
   		$tmp_img=$_FILES['image4']['tmp_name'];

    	move_uploaded_file($tmp_img,"../images/$img");
     	//$update="INSERT INTO bigandtall_images(image4)values('$img')";
        $update="UPDATE bigandtall_images SET image4='$img' WHERE id=7";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/



if(isset($_POST['bigtall_upd4'])){

        $img=$_FILES['image4']['name'];
        $tmp_img=$_FILES['image4']['tmp_name'];

        move_uploaded_file($tmp_img,"../images/$img");
        //$update="INSERT INTO bigandtall_images(image4)values('$img')";
        $update="UPDATE bigandtall_images SET image4='$img' WHERE id=7";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['update_cntnt'])){
        $hd=$_POST['head'];
        //$update="INSERT INTO bigandtall_images(image4)values('$img')";
        $update="UPDATE bigandtall_cntnt SET heading='$hd' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/

if(isset($_POST['update_cntnt2'])){
        $pr=$_POST['para'];
        //$update="INSERT INTO bigandtall_images(image4)values('$img')";
        $update="UPDATE bigandtall_cntnt SET paragraph='$pr' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


?>