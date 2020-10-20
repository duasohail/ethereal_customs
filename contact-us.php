<?php session_start();
 include('header.php');
 include('securemail.php');
 include('contact_us_mng.php');
?>
<title>Contact US | Woodbridge | Ethereal Customs</title>
<style>
.img-fluid{
    width: 100%;
    min-height:50px ;
    position: relative;
}

.img-fluid-gridWrapper {
    pointer-events: none;
}

.map-container-6{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
   }
   .map-container-6 iframe{
   left:0;
   top:0;
   height:100%;
   width:100%;
   position:absolute;
   }
}
</style>
<body>
<section class="container-flex">
   <section>
      <div class="row no-gutters">
      <img src="Assets/aa.png" class="img-fluid" alt="Responsive image" style="width: 100%; height: 470px; object-position: 50% 50%; object-fit: cover;">
      </div>
   </section>
   <hr width="500px">
<section class="section">
   <div class="row no-gutters">
   <!--Grid column-->
      <div class="col-lg-7">

      <!--Google map-->
           <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
            <iframe src="https://maps.google.com/maps?q=mississauga%20+(Ethereal%20Customs)&amp;ie=UTF8&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed
"
            frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>


         <br>
      </div>
   
      <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 mb-4">
      <!--Form with header-->
         <div class="card">
            <div class="card-body">
         <!--Body--> 

         <form action="securemail.php" id="form" method="post" name="form">
         
            <div class="md-form">
               <i class="fas fa-user prefix grey-text"></i>
               <label for="form-name">Your name</label>
               <input type="text" id="form-name" class="form-control" name="name" required>
            </div>

            <div class="md-form">
               <i class="fas fa-envelope prefix grey-text"></i>
               <label for="form-email">Your email</label>
               <input type="email" id="form-email" class="form-control" name="email" required>
            </div>

            <div class="md-form">
               <i class="fas fa-tag prefix grey-text"></i>
               <label for="form-Subject">Subject</label>
               <input type="text" id="form-Subject" class="form-control" name="sub" required>
            </div>

            <div class="md-form">
               <i class="fas fa-pencil-alt prefix grey-text"></i>
               <label for="form-text">Message</label>
               <textarea id="form-text" class="form-control md-textarea" rows="3" name="msg" required></textarea>
            </div>

            <div class="text-center mt-4">
               <button class="btn btn-light-blue" style="background-color: #dedede;width: 110px;" name="form_data" value="form_data">Submit</button>
            </div>
</form>
         </div>
      </div>
   </div>
</section>   
<center><hr width=50% size="100" color=white></center>
<section>
   <div class="row no-gutters" style="font-family: times new roman,times,serif;letter-spacing:0.1em;text-align:center;">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style="background-color:black;color:white;font-size:20px;">
            <h3 style="padding-top:65px">APPOINTMENT</h3>
            <center><hr width=50% size="100" color=white></center>
            <div style="padding-top:50px;">
            <p><?php echo $no;?></p>
               <div style="line-height: 0.2cm;;">
                  <p><?php echo $em;?></p>
                  <p>Schedule Appointment</p>
               </div>
               <br><br><br>   
            </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style="background-color:grey;color:white;font-size:20px;">
         <h3 style="padding-top:65px">ADDRESS</h3>
               <center><hr width=50% size="100" color=white></center>
               <div style="padding-top:50px;">
                  <div style="line-height: 0.2cm;;">
                     <p><?php echo $loc1;?></p>
                     <p><?php echo $loc2;?></p> 
                     <p>Schedule Appointment</p>
                  </div><br><br><br>
               </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style="font-size:20px;background-color:#e2e2e2b0">
         <h3 style="padding-top:65px">HOURS</h3>
               <center><hr width=50% size="100" color=white></center>
               <div style="padding-top:50px;">
                  <div style="line-height: 0.2cm;;">
                     <p>By Appointmnet</p>
                     <br><br>
                     <center><p style="width:50%; line-height:1.5em;"><?php echo $days;?></p></center>
                     
                  </div><br><br><br>   
               </div>

      </div>
   </div>   
</section>

<?php include("footer.php");?>
</body>