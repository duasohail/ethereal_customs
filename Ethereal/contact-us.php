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
<?php include('header.php');?>
<body>
<section class="container-flex">
   <section>
      <div class="row">
      <img src="Assets/aa.png" class="img-fluid" alt="Responsive image" style="width: 100%; height: 470px; object-position: 50% 50%; object-fit: cover;">
      </div>
   </section>
   <hr width="500px">
<section class="section">
   <section class="row">
   <!--Grid column-->
   <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
         <iframe src="https://maps.google.com/maps?q=defence%20hyderabad&t=&z=13&ie=UTF8&iwloc=&output=embed"
         frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <br>
   </div>
   
   <div class="col-lg-5 mb-4">
      <!--Form with header-->
      <div class="card">
         <div class="card-body">
         <!--Body-->
         <div class="md-form">
            <i class="fas fa-user prefix grey-text"></i>
            <label for="form-name">Your name</label>
            <input type="text" id="form-name" class="form-control">
         </div>

         <div class="md-form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label for="form-email">Your email</label>
            <input type="text" id="form-email" class="form-control">
         </div>

         <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <label for="form-Subject">Subject</label>
            <input type="text" id="form-Subject" class="form-control">
         </div>

         <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <label for="form-text">Message</label>
            <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
         </div>

         <div class="text-center mt-4">
            <button class="btn btn-light-blue">Submit</button>
         </div>
         </div>
      </div>
   </div>
</section>   
<center><hr width=50% size="100" color=white></center>
<section>
   <div class="row" style="font-family: times new roman,times,serif;letter-spacing:0.1em;text-align:center;height:400px;">
      <div class="col-md-4" style="background-color:black;color:white;font-size:20px;">
            <h3 style="padding-top:65px">APPOINTMENT</h3>
            <center><hr width=50% size="100" color=white></center>
            <div style="padding-top:50px;">
            <p>647-326-4541</p>
               <div style="line-height: 0.2cm;;">
                  <p>mississauga@etherealcustoms.co</p>
                  <p>Schedule Appointment</p>
               </div>   
            </div>
      </div>
      <div class="col-md-4" style="background-color:grey;color:white;font-size:20px;">
         <h3 style="padding-top:65px">ADDRESS</h3>
               <center><hr width=50% size="100" color=white></center>
               <div style="padding-top:50px;">
                  <div style="line-height: 0.2cm;;">
                     <p>5800 Ambler Dr, Suits 210, Unit 38</p>
                     <p>Mississauga, Ontario</p> 
                     <p>L4W 4J4</p>
                     <p>Schedule Appointment</p>
                  </div>   
               </div>
      </div>
      <div class="col-md-4" style="font-size:20px;">
         <h3 style="padding-top:65px">HOURS</h3>
               <center><hr width=50% size="100" color=white></center>
               <div style="padding-top:50px;">
                  <div style="line-height: 0.2cm;;">
                     <p>By Appointmnet</p>
                     <p>Mon - FRI: 11-7</p>
                     <p>Sat: 9-7</p>
                     <p>Sun: 12-5</p>
                  </div>   
               </div>

      </div>
   </div>   
</section>
<?php include("footer.php");?>
  