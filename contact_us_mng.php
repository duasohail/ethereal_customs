<?php
include('conn_db/conn.php');


$sel="select * from footer_location";
$run=mysqli_query($conn,$sel);
while($row=mysqli_fetch_array($run)){
	$loc1=$row['address1'];
	$loc2=$row['address2'];
	}


$sel="select * from contact_appointment";
$run=mysqli_query($conn,$sel);
while($row=mysqli_fetch_array($run)){
	$em=$row['email'];
	$no=$row['cntct_number'];
	}


$sel="select * from footer_wrkdays";
$run=mysqli_query($conn,$sel);
while($row=mysqli_fetch_array($run)){
	$days=$row['work_days'];
	
	}


?>