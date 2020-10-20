<?php include('header.php');
include('aboutus_mng.php');
?>
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
	<div class="container-flex">
			
		<div>
		<img src="images/<?php echo $img; ?>" class="img" alt="Responsive image" width=100% height="520">
		</div>
<hr align="center" width=70%>
<br>
		<div class="row" style="width:100%">
			<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
				<img class="img" src="images/<?php echo $img1; ?>" alt="" height=600px width=90%>
			</div>

		<div class="col-md-5 col-sm-7 text-center align-content-center" style="">
			<div style="padding-top:40px;">
				<center><h3 class="my-3" style="font-family:times new roman,times,serif;letter-spacing:0.1em;">About Ethereal Customs Mississauga</h3></center>
				<hr width=40%>
			<div class="secondblock"><p><?php echo $para1; ?></p>
<br>
			<p><?php echo $para2; ?></p>
			</div>
		</div>
	</div>					      
</div>
<br>
  	<hr width=50% align="center"> 
</div>
</body>
<?php include('footer.php'); ?>