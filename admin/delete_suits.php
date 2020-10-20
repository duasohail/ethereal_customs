<?php
include('../conn_db/conn.php');


$del=$_GET['delete'];
$del_query="delete from suits where id='$del'";

$del_run=mysqli_query($conn,$del_query);

if($del_run){
	include('suits_mng.php');
	
	}else{
		echo "try again";
		}


?>
