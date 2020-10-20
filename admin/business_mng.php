<?php
include('include/left_panel.php');
include('business_update.php');
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
                        <h1>Business Atire</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">

            <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >TITLE IMAGE</h3></CENTER>
                    <div class="card-body">
                        <form action= "" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                               <label class="col-form-label"><h4 class="text-dark">Update image</h4></label>
                                <input type="file" class="form-control" name="himage" value="himage" >
                                
                             </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="header_update" value="header_update">UPDATE</button></center>
                        
                        </form>
                    </div>
                       <div class="card-body border-top"></div>
                 </div>
             </div>
        </div><!--end section-->

        <!--content section start-->
        <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >Content</h3></CENTER>
                    <div class="card-body">
                        <form action= "" method="post" >
                            
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Update heading</h4></label>
                                <input type="text" class="form-control" name="head">
                             </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="update_cntnt1" value="update_cntnt1">UPDATE</button></center>
                            
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">paragraph 1</h4></label>
                                <textarea class="form-control" name="para1"></textarea>
                             </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="update_cntnt2" value="update_cntnt2">UPDATE</button></center>
                            
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">paragraph 2</h4></label>
                                <textarea class="form-control" name="para2"></textarea>
                             </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="update_cntnt3" value="update_cntnt3">UPDATE</button></center>

                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">paragraph 3</h4></label>
                                <textarea class="form-control" name="para3"></textarea>
                             </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="update_cntnt4" value="update_cntnt4">UPDATE</button></center>

                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">paragraph 4</h4></label>
                                <textarea class="form-control" name="para4"></textarea>
                             </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="update_cntnt5" value="update_cntnt5">UPDATE</button></center>
                        
                        </form>
                    </div>
                       <div class="card-body border-top"></div>
                 </div>
             </div>
        </div><!--end section-->

         <!--content section start-->
        <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >UPDATE IMAGES</h3></CENTER>
                    <div class="card-body">
                        <form action= "" method="post"  enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">IMAGE 1</h4></label>
                                <input type="file" class="form-control" name="image1" value="image1">
                                </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="upd1" value="upd1">UPDATE</button></center>
                                

                                <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark" >IMAGE 2</h4></label>
                                <input type="file" class="form-control" name="image2" value="image2">
                                </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="update2" value="update2">UPDATE</button></center>

                                <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">IMAGE 3</h4></label>
                                <input type="file" class="form-control" name="image3" value="image3">
                                </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="update3" value="update3">UPDATE</button></center>

                                <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">IMAGE 4</h4></label>
                                <input type="file" class="form-control" name="image4" value="image4">
                             </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="update4" value="update4">UPDATE</button></center>
                        
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
