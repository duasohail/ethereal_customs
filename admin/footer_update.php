<?php
include('../conn_db/conn.php');
/*if($conn){
	echo "sucess";

}else{
	echo "failed";
}*/

 if(isset($_POST['social_links'])){

        $facebk=$_POST['facebook'];
        $instagrm=$_POST['instagram'];
        //$update="INSERT INTO footer_social_links(facebook,insta)values('$facebk','$instagrm')";
        $update="UPDATE footer_social_links SET facebook='$facebk' ,insta='$instagrm' WHERE id=1";
    	
   		 mysqli_query($conn,$update);
    }/*end*/


    if(isset($_POST['location'])){

    	$loc1=$_POST['add1'];
    	$loc2=$_POST['add2'];

    	$update="UPDATE footer_location SET address1='$loc1' ,address2='$loc2' WHERE id=1";
    	
   		 mysqli_query($conn,$update);
    }/*end*/


    if(isset($_POST['wrk_days'])){
    	$time_date=$_POST['dy_tm'];

    	$update="UPDATE footer_wrkdays SET work_days='$time_date' WHERE id=1";
    	
   		 mysqli_query($conn,$update);
    }

?>