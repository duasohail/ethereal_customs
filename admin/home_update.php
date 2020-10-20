<?php
include('../conn_db/conn.php');
/*if($conn){
    echo "connected";
}*/
    

    if(isset($_POST['sub_email'])){
        $email=$_POST['upd_em'];
    //$insert="INSERT INTO appointment_email_update(email)VALUES('$email') ";
    $update="UPDATE appointment_email_update SET email='$email' where id=1 ";
    mysqli_query($conn,$update);
    }//update email


    if(isset($_POST['update1'])){

        $content=$_POST['imgcn1'];
        $link=$_POST['imgln1'];
        $img=$_FILES['img1']['name'];
    $tmp_img=$_FILES['img1']['tmp_name'];

    move_uploaded_file($tmp_img,"../images/$img");
    $update="UPDATE home_image_section SET image1='$img',img1content='$content',img1link='$link' WHERE id=37";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/



        if(isset($_POST['update2'])){
        $content=$_POST['imgcn2'];
        $link=$_POST['imgln2'];
        $img1=$_FILES['img2']['name'];
      $tmp_img1=$_FILES['img2']['tmp_name'];

    move_uploaded_file($tmp_img1,"../images/$img1");
    $update="UPDATE home_image_section SET image2='$img1' , img2content='$content' , img2link='$link' WHERE id=41";
    mysqli_query($conn,$update);
    }//section 2 end


    if(isset($_POST['update3'])){
        $content=$_POST['imgcn3'];
        $link=$_POST['imgln3'];
        $img2=$_FILES['img3']['name'];
      $tmp_img2=$_FILES['img3']['tmp_name'];

    move_uploaded_file($tmp_img2,"../images/$img2");
     //$update="INSERT INTO home_image_section(image3,img3content,img3link)values('$img2','$content','$link')";
     $update="UPDATE home_image_section SET image3='$img2' ,img3content='$content' ,img3link='$link' WHERE id=57";
    
    mysqli_query($conn,$update);
    }//section3 end


    if(isset($_POST['update4'])){
        $content=$_POST['imgcn4'];
        $link=$_POST['imgln4'];
        $img3=$_FILES['img4']['name'];
      $tmp_img3=$_FILES['img4']['tmp_name'];

    move_uploaded_file($tmp_img3,"../images/$img3");
    $update="UPDATE home_image_section SET image4='$img3' ,img4content='$content' ,img4link='$link' WHERE id=58";
    mysqli_query($conn,$update);
    }//section4 end


    if(isset($_POST['slider'])){
        $con1=$_POST['cn1'];
        $con2=$_POST['cn2'];
        $con3=$_POST['cn3'];
        $image=$_FILES['slide_img']['name'];
      $tmp_img4=$_FILES['slide_img']['tmp_name'];

    move_uploaded_file($tmp_img4,"../images/$image");
    //$update="INSERT INTO home_slideimage(image,content1,content2,content3)values('$image','$con1','$con2','$con3')";
    $update="UPDATE home_slideimage SET image='$image' , content1='$con1' , content2='$con2' , content3='$con3' WHERE id=1";
    
    mysqli_query($conn,$update);
    }//slider end



    if(isset($_POST['consult'])){
        $cons1=$_POST['consult_head'];
        $cons2=$_POST['consult1'];
        $cons3=$_POST['consult2'];
    //$update="INSERT INTO home_consultation(con_head,content1,content2)values('$cons1','$cons2','$cons3')";
    $update="UPDATE home_consultation SET con_head='$cons1' , content1='$cons2' , content2='$cons3' WHERE id =1";
    
    mysqli_query($conn,$update);
        
    }//consultation_section end



    ?>