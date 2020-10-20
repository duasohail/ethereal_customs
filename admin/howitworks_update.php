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
        $update="UPDATE howitworks SET background_img='$img1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/



if(isset($_POST['upd_hd1'])){

        $hd1=$_POST['head1'];

     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE howitworks SET sec1heading='$hd1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/



if(isset($_POST['upd_pr1'])){

        $pr1=$_POST['para1'];

     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE howitworks SET sec1paragraph='$pr1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/



if(isset($_POST['upd_hd2'])){

        $hd1=$_POST['head2'];

     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE howitworks SET sec2heading='$hd1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/



if(isset($_POST['upd_pr2'])){

        $pr1=$_POST['para2'];

     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE howitworks SET sec2paragraph='$pr1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


    if(isset($_POST['upd_hd3'])){

        $hd1=$_POST['head3'];

     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE howitworks SET sec3heading='$hd1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/



if(isset($_POST['upd_pr3'])){

        $pr1=$_POST['para3'];

     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE howitworks SET sec3paragraph='$pr1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/



  if(isset($_POST['upd_hd4'])){

        $hd1=$_POST['head4'];

     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE howitworks SET sec4heading='$hd1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/



if(isset($_POST['upd_pr4'])){

        $pr1=$_POST['para4'];

     	//$update="INSERT INTO business_attire_header(image)values('$img1')";
        $update="UPDATE howitworks SET sec4paragraph='$pr1' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/


    ?>