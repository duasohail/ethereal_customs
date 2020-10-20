<?php
include('../conn_db/conn.php');
/*if($conn){
    echo "connected";
}else{ echo "failed"; }*/


if(isset($_POST['img_update'])){

        $img=$_FILES['slide_img']['name'];
   		$tmp_img=$_FILES['slide_img']['tmp_name'];

    	move_uploaded_file($tmp_img,"../images/$img");
     	//$update="INSERT INTO wedding_header_img(image)values('$img')";
        $update="UPDATE wedding_header_img SET image='$img' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/



if(isset($_POST['update_pic'])){

    $img1=$_FILES['image1']['name'];
    $tmp_img1=$_FILES['image1']['tmp_name'];

    move_uploaded_file($tmp_img1,"../images/$img1");
    //$update="INSERT INTO wedding_images(image1)values('$img1')";
    $update="UPDATE wedding_images SET image1='$img1' WHERE id=2 ";
    mysqli_query($conn,$update);
}


if(isset($_POST['update_pic2'])){

    $img2=$_FILES['image2']['name'];
    $tmp_img1=$_FILES['image2']['tmp_name'];

    move_uploaded_file($tmp_img1,"../images/$img2");
    //$update="INSERT INTO wedding_images(image2)values('$img2')";
    $update="UPDATE wedding_images SET image2='$img2' WHERE id=4 ";
    mysqli_query($conn,$update);
}


if(isset($_POST['update_pic3'])){

    $img3=$_FILES['image3']['name'];
    $tmp_img1=$_FILES['image3']['tmp_name'];

    move_uploaded_file($tmp_img1,"../images/$img3");
    //$update="INSERT INTO wedding_images(image3)values('$img3')";
    $update="UPDATE wedding_images SET image3='$img3' WHERE id=5 ";
    mysqli_query($conn,$update);
}



if(isset($_POST['update_pic4'])){

    $img4=$_FILES['image4']['name'];
    $tmp_img1=$_FILES['image4']['tmp_name'];

    move_uploaded_file($tmp_img1,"../images/$img4");
    //$update="INSERT INTO wedding_images(image4)values('$img4')";
    $update="UPDATE wedding_images SET image4='$img4' WHERE id=6 ";
    mysqli_query($conn,$update);
}



if(isset($_POST['update_pic5'])){

    $img5=$_FILES['image5']['name'];
    $tmp_img1=$_FILES['image5']['tmp_name'];

    move_uploaded_file($tmp_img1,"../images/$img5");
    //$update="INSERT INTO wedding_images(image5)values('$img5')";
    $update="UPDATE wedding_images SET image5='$img5' WHERE id=7 ";
    mysqli_query($conn,$update);
}


if(isset($_POST['update_cntnt'])){

    $hd=$_POST['head'];
    $pr1=$_POST['para1'];
    $pr2=$_POST['para2'];
    $pr3=$_POST['para3'];

    //$update="INSERT INTO wedding_images(image4)values('$img4')";
    $update="UPDATE wedding_content SET heading='$hd' WHERE id=1 ";
    //$update="UPDATE wedding_content SET heading='$hd' , paragraph1='$pr1' , paragraph2='$pr2' , paragraph3='$pr3' WHERE id=1 ";
    mysqli_query($conn , $update);
}


if(isset($_POST['update_cntnt1'])){

    $pr1=$_POST['para1'];
  
    //$update="INSERT INTO wedding_images(image4)values('$img4')";
    $update="UPDATE wedding_content SET  paragraph1='$pr1' WHERE id=1 ";
    mysqli_query($conn , $update);
}

if(isset($_POST['update_cntnt2'])){

    $pr2=$_POST['para2'];

    //$update="INSERT INTO wedding_images(image4)values('$img4')";
    $update="UPDATE wedding_content SET paragraph2='$pr2' WHERE id=1 ";
    mysqli_query($conn , $update);
}


if(isset($_POST['update_cntnt3'])){

    $pr3=$_POST['para3'];

    //$update="INSERT INTO wedding_images(image4)values('$img4')";
    $update="UPDATE wedding_content SET  paragraph3='$pr3' WHERE id=1 ";
    mysqli_query($conn , $update);
}

?>