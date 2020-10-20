<?php session_start();
include('conn_db/conn.php');
include('index_update.php');
include('securemail.php');
/*if($conn){
    echo "connected";
}*/
?>
<?php include('header.php');
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="sweetalert.min.js.download"></script>
    <title>Ethereal Customs Mississauga: Mens’ Custom Made Suits | GTA</title>
  </head>
  <style>
  #ph{
	  font-size:12px;
	  letter-spacing:0.3em;
    margin-right: 10px;
    margin-top: 10px;
  }
  .head{
	  font-family:times new roman,times,serif;
	  font-size:55px;
	  letter-spacing:0.1em;
	  }
  #sub_head{
	  font-size:14px;
	  letter-spacing:0.05em;
	  font-family:times new roman,times,serif;
	  }
  h2{
    font-size: 24px;
    letter-spacing: 0.15em;
    font-family:times new roman,times,serif; 
    }
  .nav-link{
	  font-size:12px;
	  font-family:times new roman,times,serif;
	  line-height:50px;
	  letter-spacing:0.15em;
	  }
	#rtxt{
		font-size:36px;
		font-family:times new roman,times,serif;
		}
	#para1{
		color:black;
		text-align:justify;
		line-height:normal;
		letter-spacing:normal;
		}
  #bg{
    background-image: url('pics/head.webp');
    background-size:cover;
    width:100%;
    height:600px;
    margin:auto;
  }
  #bg_form{
    background-color:hsl(0,0%,100%,0.2); 
  }
  #inp{
    border-radius: 0%;
  }
.btn{
  font-family:times new roman,times,serif;
  border-radius: 0px;
}
#ft{
  margin-top:50px;
}
#srow{
  float: left;
}
#sr_img{
  height: 460px;
  width: 300px;
}
#anc{
  color:black;
}
#bg_full{
  background-size:cover;
  background-image:url('images/<?php echo $img_slide;?>');
  background-position: fixed;
  background-attachment: fixed;
}
#bg_blur{
  background-color:hsl(0,0%,0%,0.6);
}
#text{
  text-align: center;
  font-family:times new roman,times,serif;
  font-size:19px;
  letter-spacing: 0.13em;
}
#cntr{
  background-color: rgb(219, 219, 219);
  text-align: center;
}
#stup_txt{
  margin-top:90px;
  margin-bottom:15px;
  font-size:45px;
  font-family:times new roman,times,serif; 
}
#spac1{
  font-size: 17px;
  font-family:times new roman,times,serif;
  letter-spacing: 0.15em;
}
#spac2{
  font-size: 17px;
  font-family:times new roman,times,serif;
  letter-spacing: 0.15em;
  margin-bottom:20px;
}
#instafeed img{
  margin-bottom: 30px;
  height: 310px;
  width: 310px;

}
#instafeed img:hover{
  opacity: 0.8 ;
  -moz-opacity:0.8;
  -webkit-opacity:0.8;
}
  </style>
  <body>
    <div class=" container-flex">
  
    <div class="row no-gutters" id='bg'>
       <div class="col-sm-5 col-md-5 w-100 "></div>
         <div class="col-sm-6 col-md-6 p-5 ml-3" id="ft">
            <div class="col-sm-12 col-md-12 p-5" id="bg_form">
            <form action="securemail.php" id="form" method="post" name="fm">
              <div class="form-group ">
                <div class="  text-light text-center"><h2>Book Your Appointment</h2></div>

                <input Required class="p-2 form-control text-center text-black h-50 mt-3 " id="inp" type="text" name="nm" placeholder="Name">
                <input Required class="p-2 form-control text-center text-black h-50 mt-4" id="inp" type="email" name="em" placeholder="Email">
                <input Required class="p-2 form-control text-center text-black h-50 mt-4" id="inp" type="text" name="ph" placeholder="Phone">
                <button type="submit" name="submit" value="submit" class="btn btn-danger p-2 w-100 mt-4" style="background-color: rgb(138, 6, 25);" >Book now</button>
                
               <script>
                
                var sub=document.fm.submit.value;
                if(sub==true){
                 
                } swal("your appointment successfully booked");
                </script>
              </div>
            </div>
            </form>
            
         </div>
         <div class="col-sm-1 col-md-1"></div>
       </div>

    </div>
  </div>


  <div class="row no-gutters">
    <div class="col-sm-12 col-md-12 pt-5 pl-5 pr-5">
      <div id="srow" class="col-sm-3 col-md-3"><img id="sr_img" class="img-fluid " src="images/<?php echo $img1;?>"><h2 class="text-sm-center" style="font-size:20px;;margin-top:10px;"><?php echo $con1; ?></h2><a href="<?php echo $link1; ?>" id="anc" ><u><center><b class="text-dark text-sm-center">find out more</b></center></u></a></div>
      <div id="srow" class="col-sm-3 col-md-3"><img id="sr_img" class="img-fluid " src="images/<?php echo $img2;?>"><h2 class="text-sm-center" style="font-size:20px;margin-top:10px;"><?php echo $con2; ?></h2><a href="<?php echo $link2; ?>" id="anc" ><u><center><b class="text-dark text-sm-center">find out more</b></center></u></a></div>
      <div id="srow" class="col-sm-3 col-md-3"><img id="sr_img" class="img-fluid " src="images/<?php echo $img3;?>"><h2 class="text-sm-center" style="font-size:20px;margin-top:10px;"><?php echo $con3; ?></h2><a href="<?php echo $link3; ?>" id="anc" ><u><center><b class="text-dark text-sm-center">find out more</b></center></u></a></div>
      <div id="srow" class="col-sm-3 col-md-3"><img id="sr_img" class="img-fluid " src="images/<?php echo $img4;?>"><h2 class="text-sm-center" style="font-size:20px;margin-top:10px;"><?php echo $con4; ?></h2><a href="<?php echo $link4; ?>" id="anc" ><u><center><b class="text-dark text-sm-center">find out more</b></center></u></a></div>
    </div>
  </div>

  <div class="row no-gutters pt-5">
    <div class="col-sm-12 col-md-12  " id="bg_full">
    <div class="col-sm-12 col-md-12 p-5" id="bg_blur">
      <div class="col-sm-12 col-md-12 text-white " id="text">
        <div style="margin-bottom:6px;"><?php echo $cont1; ?></div>
        <div style="margin-bottom:6px;"><?php echo $cont2; ?></div>
        <div style="margin-bottom:6px;"><?php echo $cont3; ?></div>
      </div>
    </div>
  </div>
  </div>


  <div class="row no-gutters pt-5" >
    <div class="col-sm-12 col-md-12 " id="cntr">
      <div id="stup_txt" ><?php echo $heading; ?></div>
      <div class="text-black"id="spac1" ><?php echo $text1; ?></div>
      <div class="text-black"id="spac2" ><?php echo $text2; ?></div>
      <div style="margin-bottom:80px;"><a href="index.php"><button class="btn btn-dark p-2 " style="font-size:18px;">Book Now!</button></a></div>
    </div>
  </div>

  <div class="row no-gutters">
    <div class="col-sm-12 col-md-12 text-dark" style="margin-top:50px;margin-bottom:20px;font-family:times new roman,times,serif;text-align:center;font-size:45px;">Follow us on Instagram</div>
  </div>


  <div class="container">
    <div class="row" id="instafeed">
    </div>
  </div>


  

 
    <!--footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/instafeed.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
  </body>
</html>
<?php include('footer.php')?>
