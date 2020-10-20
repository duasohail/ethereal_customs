<?php include('header.php'); 
include('business_attire_mng.php');
?>

<title>Business Attire | Ethereal Customs</title>
<style>

.container-flex{
   font-family:'Times New Roman', Times, serif;
}

.h4{
   font-size: 32px;   
}
.para{
   font-size:19px;
}

.text{
   font-size:25px;
}

.text-3{
   font-size:24px;
}


</style>
<div class="container-flex">
   <div class="row no-gutters">
      <div class="col-md col-sm col-lg">
            <img src="images/<?php echo $img;?>" class="img-fluid" style="width:100%;position:relative;top:0;bottom: 0;">
      </div>
   </div>
   <br>
   <div class="row no-gutters" style="color:black;">
      <div class="col-md col-sm col-lg text-center">
         <p class="text"> BUSINESS ATTIRE BY ETHEREAL CUSTOMS MISSISSAUGA</p>
         <hr width="70%">
         <p class="text-3"><?php echo $head;?></p><br>
         <div class="para">
            <center><p class="text-center" style="width:70%;"><?php echo $para1;?></p></center><br>

            <center><p><?php echo $para2;?></p><br></center>
              
            <center><p style="width:68%;"><?php echo $para3;?></p></center><br>
            <center><p style="width:70%;"><?php echo $para4;?></p></center>

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
                  <td rowspan="2"><img src="images/<?php echo $img1; ?>" class="img-thumbnail"></td>             
                  <td><img src="images/<?php echo $img2; ?>" class="img-thumbnail"></td>
                  <td><img src="images/<?php echo $img3; ?>" class="img-thumbnail"></td>
               </tr>
               <tr>
                  <td><img src="images/<?php echo $img4; ?>" class="img-thumbnail"></td>
                  <td></td> 
               </tr>
            </table>      
      </div>
   </div>

</div>
<?php include('footer.php')?>