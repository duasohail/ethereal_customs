<?php
include('../conn_db/conn.php');
/*if($conn){
    echo "connected";
}else{ echo "failed"; }*/

    if(isset($_POST['head_update'])){

        $phno=$_POST['num'];
        $update="INSERT INTO header_data(phone_no)values('$phno')";
        $update="UPDATE header_data SET phone_no='$phno' WHERE id=1";
    
    mysqli_query($conn,$update);
    }/*end of section 1*/

    ?>