<?php include ('header.php');
include('howitworks_mng.php');
?>
<style>
#bg_full{
  background-size:cover;
  background-image:url('images/<?php echo $img; ?>');
  background-position: center;
}
.testt{
}
.container-flex{
   color:#FFFFFF;
   font-family: 'Times New Roman', Times, serif;
}

.card-body{
   background-color:black;

}
</style>
<div class="container-flex" id="bg_full">
   <div class="row no-gutters text-center">
      <div class="col-md col-sm">
         <span style="font-family:didot-w01-italic,serif;font-size:56px;letter-spacing:0.1em;font-style:italic;">Our Process</span>       
      </div>
   </div>

   <div class="row no-gutters text-center">
      <div class="col-md-3 col-sm-12 col-lg-3 p-5">
         <div class="card w-100">
            <div class="card-body">
               <p class="h4" style="padding-top:40px;padding-bottom:10px;"><?php echo $head1; ?></p>
               <p style="padding-bottom:120px;"><?php echo $para1; ?> </p>  
            </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-12 col-lg-3 p-5">
         <div class="card w-100">
            <div class="card-body">
               <p p class="h4" style="padding-top:40px;padding-bottom:10px;"><?php echo $head2; ?></p>
               <p><?php echo $para2; ?></p>  
            </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-12 col-lg-3 p-5">
         <div class="card">
            <div class="card-body">
               <p class="h4" style="padding-top:40px;padding-bottom:10px;"><?php echo $head3; ?></p>
               <p style="padding-bottom:70px;"><?php echo $para3; ?></p>  
            </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-12 col-lg-3 p-5">
         <div class="card">
            <div class="card-body">
               <p class="h4" style="padding-top:40px;padding-bottom:10px;"><?php echo $head4; ?></p>
               <p style="padding-bottom:70px;"><?php echo $para4; ?> </p>  
            </div>
         </div>
      </div>
   </div>
</div>
<?php include ('footer.php');?>
