<?php include('header.php');
?>
<style>
.myButton {
	background-color:#768d87;
	border:1px solid #566963;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:16px 52px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2b665e;
}
.myButton:hover {
	background-color:#6c7c7c;
}
.myButton:active {
	position:relative;
	top:1px;
}

</style>
<div class="container-fluid">
  <center>
   <div class="row no-gutters" style="width:80%">


         <?php 
          include('conn_db/conn.php');


          $query="select * from shirts  ";
          $run=mysqli_query($conn,$query);
          while($row=mysqli_fetch_array($run)){
              $serial1=$row['id'];
              $img=$row['image'];
          


          ?>
          <div class="col-md-4 col-sm-12  pl-1 pr-1">
            <img class="img-thumbnail"src="images/<?php echo $img; ?>">
            <hr color="white">
          <!--<img class="pb-4 pt-4 col-lg-4 img-thumbnail" src="images/<?php echo $img;?>">-->
       </div>
          

         <?php  } ?>
      

   </div><br><center><a href="index.php" class="myButton">Book Now</a></center>
</center>
</div>
<?php
 include('footer.php');
?>
