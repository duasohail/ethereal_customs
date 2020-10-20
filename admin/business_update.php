<?php
include('../conn_db/conn.php');
/*if($conn){
    echo "connected";
}else{ echo "failed"; }*/


if(isset($_POST['header_update'])){

        $img1=$_FILES['himage']['name'];
   		$tmp_img=$_FILES['himage']['tmp_name'];

    	move_uploaded_file($tmp_img,"../images/$img1");
     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE business_attire_header SET image='$img1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/



if(isset($_POST['upd1'])){

        $img1=$_FILES['image1']['name'];
   		$tmp_img=$_FILES['image1']['tmp_name'];

    	move_uploaded_file($tmp_img,"../images/$img1");
     	//$update="INSERT INTO business_images(image1)values('$img1')";
        $update="UPDATE business_images SET image1='$img1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/



if(isset($_POST['update2'])){

        $img2=$_FILES['image2']['name'];
        $tmp_img=$_FILES['image2']['tmp_name'];

        move_uploaded_file($tmp_img,"../images/$img2");
        //$update="INSERT INTO business_images(image2)values('$img2')";
        $update="UPDATE business_images SET image2='$img2' WHERE id=7";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['update3'])){

        $img3=$_FILES['image3']['name'];
        $tmp_img=$_FILES['image3']['tmp_name'];

        move_uploaded_file($tmp_img,"../images/$img3");
        //$update="INSERT INTO business_images(image3)values('$img3')";
        $update="UPDATE business_images SET image3='$img3' WHERE id=8";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/




if(isset($_POST['update4'])){

        $img4=$_FILES['image4']['name'];
        $tmp_img=$_FILES['image4']['tmp_name'];

        move_uploaded_file($tmp_img,"../images/$img4");
        //$update="INSERT INTO business_images(image4)values('$img4')";
        $update="UPDATE business_images SET image4='$img4' WHERE id=9";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['update_cntnt1'])){

        $hd=$_POST['head'];       
        //$update="INSERT INTO business_images(image4)values('$img4')";
        $update="UPDATE business_cntnt SET heading='$hd' WHERE id=1 ";
    mysqli_query($conn , $update);
    }/*end of section 1*/


if(isset($_POST['update_cntnt2'])){

        $pr1=$_POST['para1'];       
        //$update="INSERT INTO business_images(image4)values('$img4')";
        $update="UPDATE business_cntnt SET paragraph1='$pr1' WHERE id=1 ";
    mysqli_query($conn , $update);
    }/*end of section 1*/

if(isset($_POST['update_cntnt3'])){

        $pr2=$_POST['para2'];       
        //$update="INSERT INTO business_images(image4)values('$img4')";
        $update="UPDATE business_cntnt SET paragraph2='$pr2' WHERE id=1 ";
    mysqli_query($conn , $update);
    }/*end of section 1*/

if(isset($_POST['update_cntnt4'])){

        $pr3=$_POST['para3'];       
        //$update="INSERT INTO business_images(image4)values('$img4')";
        $update="UPDATE business_cntnt SET paragraph3='$pr3' WHERE id=1 ";
    mysqli_query($conn , $update);
    }/*end of section 1*/

if(isset($_POST['update_cntnt5'])){

        $pr4=$_POST['para4'];       
        //$update="INSERT INTO business_images(image4)values('$img4')";
        $update="UPDATE business_cntnt SET paragraph4='$pr4' WHERE id=1 ";
    mysqli_query($conn , $update);
    }/*end of section 1*/


?>