<?php 
include('../conn_db/conn.php');
/*if($conn){

	echo "seccess";
}else{

	echo "failed";
}*/

if(isset($_POST['img_upd'])){

        $image=$_FILES['img']['name'];
   		$tmp_img=$_FILES['img']['tmp_name'];

    	move_uploaded_file($tmp_img,"../images/$image");
     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE homefitting_cntnt SET sec1image='$image' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/

if(isset($_POST['head_update'])){

        $hd=$_POST['head'];
   		
    	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE homefitting_cntnt SET sec1heading='$hd' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/

if(isset($_POST['para_update'])){

        $pr=$_POST['para'];
   		
    	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE homefitting_cntnt SET sec1paragraph='$pr' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


 if(isset($_POST['icn_img'])){

        $icon=$_FILES['secicon']['name'];
        $tmp_img=$_FILES['secicon']['tmp_name'];

   		move_uploaded_file($tmp_img,"../images/$icon");
    	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE homefitting_cntnt SET sec1icon='$icon' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['img_update1'])){

        $image=$_FILES['img1']['name'];
        $tmp_img=$_FILES['img1']['tmp_name'];

   		move_uploaded_file($tmp_img,"../images/$image");
    	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE homefitting_cntnt SET sec2image='$image' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['text_update'])){

        $txt=$_POST['txt1'];
   		
    	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE homefitting_cntnt SET sec2heading='$txt' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['para1_update'])){

        $pr1=$_POST['para1'];
   		
    	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE homefitting_cntnt SET sec2paragraph1='$pr1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/

if(isset($_POST['para2_update'])){

        $pr2=$_POST['para2'];
   		
    	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE homefitting_cntnt SET sec2paragraph2='$pr2' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['img_update2'])){

        $image=$_FILES['img2']['name'];
        $tmp_img=$_FILES['img2']['tmp_name'];

   		move_uploaded_file($tmp_img,"../images/$image");
    	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE homefitting_cntnt SET sec3image='$image' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/

if(isset($_POST['hd_upd1'])){

        $hd1=$_POST['text2'];
   		
    	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE homefitting_cntnt SET sec3hedaing='$hd1' WHERE id=1";
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['upd_step1'])){

        $stp1=$_POST['step1'];
   		
    	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE homefitting_cntnt SET step1='$stp1' WHERE id=1";
    mysqli_query($conn,$update);
    }/*end of section 1*/

if(isset($_POST['upd_step2'])){

        $stp2=$_POST['step2'];
   		
    	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE homefitting_cntnt SET step2='$stp2' WHERE id=1";
    mysqli_query($conn,$update);
    }/*end of section 1*/


if(isset($_POST['upd_step3'])){

    $stp3=$_POST['step3'];

    $update="UPDATE homefitting_cntnt SET step3='$stp3' WHERE id=1";
mysqli_query($conn,$update);
}/*end of section 1*/


if(isset($_POST['upd_step4'])){

    $stp4=$_POST['step4'];

    $update="UPDATE homefitting_cntnt SET step4='$stp4' WHERE id=1";
mysqli_query($conn,$update);
}/*end of section 1*/


if(isset($_POST['upd_step5'])){

    $stp5=$_POST['step5'];
		
    $update="UPDATE homefitting_cntnt SET step5='$stp5' WHERE id=1";
mysqli_query($conn,$update);
}/*end of section 1*/


if(isset($_POST['insert_area'])){

    $ar=$_POST['area'];
		
	$insert="INSERT INTO services_area(area)values('$ar')";
mysqli_query($conn,$insert);
}/*end of section 1*/





?>