<?php
include('footer_mng.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X 965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH 8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV 2 9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3 MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
<div class="container">
      <div class="row no-gutters" style="font-family: times new roman,times,serif;padding-top:50px;font-size:14px;">
         <div class="col-md col-sm text-center" >
         <img src="https://img.icons8.com/material-rounded/50/000000/facebook-new.png" style="width:20px;padding-right:2px;">
           <a target="_blank" href="<?php echo "$fcbk"; ?>" > Facebook</a>
         <img src="https://img.icons8.com/ios-glyphs/30/000000/instagram-new.png" style="width:20px;padding-right:2px;">
         <a target="_blank"  href="<?php echo "$instagram";?>">Instagram</a>
         </div>
      </div>
      <div class="row no-gutters" style="font-family: times new roman,times,serif;padding-top:50px;">
         <div class="col-md col-sm" style="text-align:center">
         <?php echo $add1; ?>
         </div>
      </div>
      <div class="row no-gutters" style="font-family: times new roman,times,serif;">
         <div class="col-md col-sm" style="text-align:center">
         <?php echo $add2; ?>
         </div>
      </div>
      <div class="row no-gutters" style="font-family: times new roman,times,serif;padding-top:30px;">
         <div class="col-md col-sm" style="text-align:center"><?php echo "$days"; ?></div>
      </div>
      <div class="row no-gutters" style="font-family: times new roman,times,serif;padding-top:60px;">
         <div class="col-md col-sm" style="text-align:center;font-size:12px;">©2018 Ethereal customs - Terms & Conditions -Privacy Policy</div>
      </div>
   </div>
<section>
</body>