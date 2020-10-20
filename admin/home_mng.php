<?php
include('../conn_db/conn.php');
include('home_update.php');
/*if($conn){
    echo "connected";
}*/
?>
<?php
include('include/left_panel.php');
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <?php
        include('include/header.php');
        ?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Home</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">

        <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >Book Your Appointment</h3></CENTER>
                    <div class="card-body">
                        <form action= "" method="post">
                            <div class="form-group">
                               <center><label class="col-form-label"><h4 class="text-dark">Update An Email</h4></label></center>
                                <textarea class="form-control" id="" name="upd_em"></textarea>

                            </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="sub_email" value="sub_email">UPDATE</button></center>
                        
                        </form>
                    </div>
                       <div class="card-body border-top"></div>
                
                       
                </div>
             </div>
        </div><!--end section-->

        <!--pictures section -->
        <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;" >IMAGES SECTION </h3></CENTER>
                    <div class="card-body">
                        <form action="" method="post"  enctype="multipart/form-data">
                            <div class="form-group">
                               <label class="col-form-label"><h4 class="text-dark">Update Image 1</h4></label>
                                <input type="file" class="form-control" value="img1" name="img1">
                                <label class="col-form-label"><h4 class="text-dark">Update Content Of Image</h4></label>
                                <input type="text" class="form-control" name="imgcn1">

                                <label class="col-form-label"><h4 class="text-dark">Update link "find out more"</h4></label>
                                <input type="text" class="form-control" name="imgln1">

                            </div>
                           
                            <center><button class="btn btn-outline-dark" type="submit" name="update1" value="update1">UPDATE</button></center>
                        
                        </form>
                    </div><!--end picture 1 section-->


                       <div class="card-body border-top"></div>
                     <div class="card-body">
                        <form action= "" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                               <label class="col-form-label"><h4 class="text-dark">Update Image 2</h4></label>
                                <input type="file" class="form-control" value="img2" name="img2">
                                <label class="col-form-label"><h4 class="text-dark">Update Content Of Image</h4></label>
                                <input type="text" class="form-control" name="imgcn2">

                                <label class="col-form-label"><h4 class="text-dark">Update link "find out more"</h4></label>
                                <input type="text" class="form-control" name="imgln2">

                            </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="update2" value="update2">UPDATE</button></center>
                        
                        </form>
                    </div>


                    <!-- picture 3 -->
                     <div class="card-body border-top"></div>
                     <div class="card-body">
                        <form action= "" method="post"  enctype="multipart/form-data">
                            <div class="form-group">
                               <label class="col-form-label"><h4 class="text-dark">Update Image 3</h4></label>
                                <input type="file" class="form-control" id="" name="img3" value="img3">
                                <label class="col-form-label"><h4 class="text-dark">Update Content Of Image</h4></label>
                                <input type="text" class="form-control" name="imgcn3">

                                <label class="col-form-label"><h4 class="text-dark">Update link "find out more"</h4></label>
                                <input type="text" class="form-control" name="imgln3">

                            </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="update3" value="update3">UPDATE</button></center>
                        
                        </form>
                    </div>

                    <!--pictuture 4-->
                    <div class="card-body border-top"></div>
                     <div class="card-body">
                        <form action= "" method="post"  enctype="multipart/form-data">
                            <div class="form-group">
                               <label class="col-form-label"><h4 class="text-dark">Update Image 4</h4></label>
                                <input type="file" class="form-control" id="" name="img4" value="img4">
                                <label class="col-form-label"><h4 class="text-dark">Update Content Of Image</h4></label>
                                <input type="text" class="form-control" name="imgcn4">

                                <label class="col-form-label"><h4 class="text-dark">Update link "find out more"</h4></label>
                                <input type="text" class="form-control" name="imgln4">

                            </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="update4" value="update4">UPDATE</button></center>
                        
                        </form>
                    </div>
                       <div class="card-body border-top"></div>

                       
                </div>
             </div>
        </div>
        <!--end picture section-->
        
         <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >Slider Image Section</h3></CENTER>
                    <div class="card-body">
                        <form action= "" method="post"  enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Update Slider Image</h4></label>
                                <input type="file" class="form-control" name="slide_img" value="slide_img">
                                <label class="col-form-label"><h4 class="text-dark">Update Content</h4></label> 
                                <input type="text" class="form-control" name="cn1" ><br>
                                <input type="text" class="form-control" name="cn2" ><br>
                                <input type="text" class="form-control" name="cn3">

                            </div>
                          
                            <center><button class="btn btn-outline-dark" type="submit" name="slider" value="slider">UPDATE</button></center>
                        
                        </form>
                    </div>
                       <div class="card-body border-top"></div>
                
                       
                </div>
             </div>
        </div><!--end section-->

         <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >Setup A Free Consultation Section</h3></CENTER>
                    <div class="card-body">
                        <form action= "" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Update heading</h4></label>
                                <input type="text" class="form-control" name="consult_head">
                                <label class="col-form-label"><h4 class="text-dark"> content</h4></label> 
                                <input type="text" class="form-control" name="consult1">
                                <label class="col-form-label"><h4 class="text-dark"> content</h4></label> 
                                <input type="text" class="form-control" name="consult2">

                            </div>
                           
                            <center><button class="btn btn-outline-dark" type="submit" name="consult" value="consult">UPDATE</button></center>
                        
                        </form>
                    </div>
                       <div class="card-body border-top"></div>
                
                       
                </div>
             </div>
        </div><!--end section-->




        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    

</body>

</html>
