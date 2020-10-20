<?php
include('conn_db/conn.php');
/*if($conn){
    echo "connected";
}*/
$sel_query="select * from header_data where id=1";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	 $phone=$row['phone_no'];
	}

?>