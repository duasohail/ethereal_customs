<?php
include('include/left_panel.php');
include('aboutus_update.php');
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
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">


        <!--content section start-->
        <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >TITLE IMAGE</h3></CENTER>
                    <div class="card-body">
                        <form action= "" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Update image</h4></label>
                                <input type="file" class="form-control" name="img">
                                <br>
                            <center><button class="btn btn-outline-dark" type="submit" name="upd_img" value="upd_img">UPDATE</button>
                            </center>
                        
                        </form>
                    </div>
                       <div class="card-body border-top"></div>
                 </div>
             </div>
        </div><!--end section-->
        </div> <!-- .content -->


        <!--content section start-->
        <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >CONTENT UPDATE</h3></CENTER>
                    <div class="card-body">
                        <form action= "" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Update Left Image</h4></label>
                                <input type="file" class="form-control" name="img1">
                                <br>
                            <center><button class="btn btn-outline-dark" type="submit" name="upd_img1" value="upd_img1">UPDATE</button>
                            </center>
						    </div>

						    <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Update paragraph1</h4></label>
                                <textarea class="form-control" name="para1"></textarea>
                                <br>
                            <center><button class="btn btn-outline-dark" type="submit" name="upd_pr1" value="upd_pr1">UPDATE</button>
                            </center>
						    </div>

						    <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Update paragraph2</h4></label>
                                <textarea class="form-control" name="para2"></textarea>
                                <br>
                            <center><button class="btn btn-outline-dark" type="submit" name="upd_pr2" value="upd_pr2">UPDATE</button>
                            </center>
						    </div>

                        </form>
                    </div>
                       <div class="card-body border-top"></div>
                 </div>

             </div>
        </div><!--end section-->

        
        
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