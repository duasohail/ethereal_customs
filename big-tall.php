<?php include('header.php');
include('bigtall_mng.php');
 ?>
<title>Big And Tall | Ethereal Customs</title>
<style>

.container-flex{
   font-family:'Times New Roman', Times, serif;
}

h2{
   font-size:24px;   
}
.para{
   font-size:19px;
}

.text{
   font-size:24px;
}

.text-3{
   font-size:23px;
}

</style>
<div class="container-flex">
   <div class="row no-gutters">
      <div class="col-md col-sm col-lg">
         <div class="image">
            <img src="images/<?php echo $img;?>" class="img-fluid" style="width:100%;height:430px;position:relative;top:0;botimages/<?php echo $img;t?>om: 0;">
         </div>
      </div>
   </div>
   <br>
   <div class="row no-gutters" style="color:black;">
      <div class="col-md col-sm col-lg text-center">
         <p class="text"> BIG AND TALL</p>
         <hr width="70%">
         <center><p class="text-3" style="width:63%;"><?php echo $head;?></p></center><br>
         <div class="para">
            <center><p class="text-center" style="width:70%;"><?php echo $para;?></p></center>
            
         </div>
      </div>
   </div>
   <br>
   <div class="row no-gutters" >
      <div class="col-md col-sm col-lg">
         <hr width="80%"> 
      </div>
   </div>
   
   <div class="row no-gutters" >
      <div class="col-md col-sm col-lg">
         <td class="table">
            <table align="center">
               <tr>
                  <td rowspan="2"><img src="images/<?php echo $img1;?>" class="img-thumbnail"></td>             
                  <td><img src="images/<?php echo $img2;?>" class="img-thumbnail"></td>
                  <td><img src="images/<?php echo $img3;?>" class="img-thumbnail"></td>
               </tr>
               <tr>
                  <td><img src="images/<?php echo $img4;?>" class="img-thumbnail"></td>
                  <td></td> 
               </tr>
            </table>      
      </div>
   </div>

</div>
<?php include('footer.php')?>