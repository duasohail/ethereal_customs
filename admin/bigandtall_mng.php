<?php
include('include/left_panel.php');
include('bigandtall_update.php');
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
                        <h1>Big And Tall </h1>
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
                                <input type="file" class="form-control" name="image" value="image">
                                
                             </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="bigtall_header" value="bigtall_header">UPDATE</button></center>
                        
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
                        <form action= "" method="post">
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Update heading</h4></label>
                                <textarea class="form-control" name="head"></textarea>
                            </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="update_cntnt">UPDATE</button></center>


                                <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">paragraph 1</h4></label>
                                <textarea class="form-control" name="para"></textarea>
                            </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="update_cntnt2">UPDATE</button></center>

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
                        <form action= "" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Image 1</h4></label>
                                <input type="file" class="form-control" name="image1" value="image1">
                            </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="bigtall_upd1" value="bigtall_upd1">UPDATE</button></center>



                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Image 2</h4></label>
                                <input type="file" class="form-control" name="image2"value="image2">
                            </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="bigtall_upd2" value="bigtall_upd2">UPDATE</button></center>




                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Image  3</h4></label>
                                <input type="file" class="form-control" name="image3" value="image3">
                            </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="bigtall_upd3" value="bigtall_upd3">UPDATE</button></center>



                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Image 4</h4></label>
                                <input type="file" class="form-control" name="image4" value="4">
                             </div>
                            <center><button class="btn btn-outline-dark" type="submit" name="bigtall_upd4" value="bigtall_upd4">UPDATE</button></center>
                        
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
