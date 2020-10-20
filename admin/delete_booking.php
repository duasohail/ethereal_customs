<?php
include('../conn_db/conn.php');

$del=$_GET['delete'];
$del_query="delete from securemail_data where id='$del'";

$del_run=mysqli_query($conn,$del_query);

if($del_run){
	include('appointment.php');
	
	}else{
		echo "try again";
		}



?>