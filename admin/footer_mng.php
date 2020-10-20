<?php
include('footer_update.php');
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
                        <h1>Footer</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">


        <!--content section start-->
        <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >Social Links</h3></CENTER>
                    <div class="card-body">
                        <form action= "" method="post">
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Update Facebook Link</h4></label>
                                <input type="text" class="form-control" name="facebook">
                                <label class="col-form-label"><h4 class="text-dark">Update Instagram Link</h4></label>
                                <input type="text" class="form-control" name="instagram">
                                <br>
                            <center><button class="btn btn-outline-dark" type="submit" name="social_links" value="social_links">UPDATE</button></center>
                        
                        </form>
                    </div>
                       <div class="card-body border-top"></div>
                 </div>
             </div>
             </div>
        </div><!--end section-->


        <!--content section start-->
        <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >Location</h3></CENTER>
                    <div class="card-body">
                        <form action= "" method="post">
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Update address</h4></label>
                                <textarea class="form-control" name="add1"></textarea><br>
                                <textarea type="text" class="form-control" name="add2"></textarea>
                                <br>
                            <center><button class="btn btn-outline-dark" type="submit" name="location" value="location">UPDATE</button></center>
                        
                        </form>
                    </div>
                       <div class="card-body border-top"></div>
                 </div>
             </div>
             </div>
        </div><!--end section-->

        <!--content section start-->
        <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >TIME AND WORKING DAYS</h3></CENTER>
                    <div class="card-body">
                        <form action= "" method="post">
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Update day and time </h4></label>
                                <input type="text" class="form-control" name="dy_tm">
                                <br>
                            <center><button class="btn btn-outline-dark" type="submit" name="wrk_days" value"wrk_days">UPDATE</button></center>
                        
                        </form>
                    </div>
                       <div class="card-body border-top"></div>
                 </div>
             </div>
             </div>
        </div><!--end section-->

        
        
        </div> <!-- .content -->
    </div><!-- /#right-panel -->
        
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
