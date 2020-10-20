<?php include('header.php');
include('homefitting_mng.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ETHEREAL CUSTOMS | HOME &amp; OFFICE SERVICE </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X 965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH 8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV 2 9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3 MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<section>
<div class="container-flex">
 <div class="row" style="width:100%">
<div class="col-md-6 col-sm-6 text-center" style="padding-top:150px;color: #414141;font-family:times new roman,times,serif;letter-spacing: 0.1em;line-height:1.0em" >
        <h3><?php echo $head; ?></h3>
        <center><p style="padding-top:30px;font-size:21px; width:64%; letter-spacing:0.15em;line-height:30px; "><?php echo $para;?></p></center>
       <br><br><center><img src="images/<?php echo $icon; ?>" class="img-responsive" alt="Cinque Terre"> </center>
     <hr>
   </div>
<div class="col-md-6  col-sm-6"><img src="images/<?php echo $img; ?>" class="img-rounded" alt="Cinque Terre" style="width:100%;"></div>
</div>
</div>
<div  class="container-flex">
<div class="row no-gutters"  style=" width: 100">
  <div class="col-md-5 col-sm-5 "style=" width: 100%;  background-color: grey;/* position:relative;top:0;bottom:0;*/ line-height: 1.2cm;padding-left: 90px; padding-right: 60px; background-color: grey; color: white; font-family: times new roman,times,serif;letter-spacing:0.1em;" >
    <h3 style="padding-top:50px;padding-bottom:20px;"><u><?php echo $head1; ?></u></h3>
    <p style="font-size: 20px; line-height:1.5em; text-align:justify; letter-spacing:0.13em;"><?php echo $para1; ?></p>
    <p style="font-size: 20px; line-height:1.5em; text-align:justify; letter-spacing:0.13em;"><?php echo $para2;?></p>
  </div>
  <div class="col-md-7 col-sm-7"><img src="images/<?php echo $img1; ?>"  alt="Cinque Terre" style=" width:100%;"></div>
</div>
</div>

<div class="container-flex">
<div class="row no-gutters" style="width:100%">
  <div class="col-md-4 col-sm-4"><img src="images/<?php echo $img2; ?>" class="img-rounded" alt="Cinque Terre" style=" width: 100%;height:1500px;"></div>
  
  <div class="col-md-8 col-sm-8" style="width:100%; background-color: black; color:white;padding-left:40px;font-family:times new roman,times; font-size:21px;"> 
  <h4 style=" padding-top:50px;font-family:"><?php echo $head2;?></h4> 
<ul style="display:block; line-height:55px;">
    <li style="display:block;"><?php echo $stp1;?></li>
    <li style="display:block;"><?php echo $stp2;?></li>
    <li style="display:block;"><?php echo $stp3;?></li>
    <li style="display:block; line-height:25px;"><?php echo $stp4;?></li>
    <li style="display:block;"><?php echo $stp5;?></li>
    
</ul>
<div style="padding-left:30px;">
  <p>Book An Appointment</p>
  <a href="index.php"><button type="button" class="btn btn-primary">Book Now</button></a>
  </div> 
  <h4 style="padding-top:65px;"><u>Area Of Service</u></h4><br>
  <?php 
        include('conn_db/conn.php');


        $query="select * from services_area  ";
        $run=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($run)){
            $service=$row['area'];
                          
                ?>
  <ul style="line-height:20px;">
    <li style="display:block;"><?php echo $service;?></li>
    
</ul>
<?php }?>
</div>


</div>



</div>







<?php include('footer.php');?>
</section>
</body> 