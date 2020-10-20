<?php
include('include/left_panel.php');
include('homefitting_update.php');
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
                        <h1>Home Fitting</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">


        <!--content section start-->
        <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >Section 1</h3></CENTER>
                    <div class="card-body">
                        <form action= "" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Right Image</h4></label>
                                <input type="file" class="form-control" name="img">
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="img_upd" value="img_upd">UPDATE</button></center>
                            </div>


                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Heading</h4></label>
                                <textarea type="text" class="form-control" name="head"></textarea>
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="head_update" value="head_update">UPDATE</button></center>
                            </div>


                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Paragraph</h4></label>
                                <textarea type="text" class="form-control" name="para"></textarea>
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="para_update" value="para_update">UPDATE</button></center>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Icon</h4></label>
                                <input type="file" class="form-control" name="secicon">
                                <br>
                            <center><button class="btn btn-outline-dark" type="submit" name="icn_img" value="icn_img">UPDATE</button></center>
                            </div>
                        </form>
                    
                       <div class="card-body border-top"></div>
                 </div>
             </div>
        </div><!--end section-->

        
        </div> <!-- .content -->
         <!--content section start-->
        <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >Section 2</h3></CENTER>
                    <div class="card-body">
                        <form action= "" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Image</h4></label>
                                <input type="file" class="form-control" name="img1">
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="img_update1" value="img_update1">UPDATE</button></center>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Heading</h4></label>
                                <input type="text" class="form-control" name="txt1">
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="text_update" value="txt_update">UPDATE</button></center>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Paragraph1</h4></label>
                                <textarea class="form-control" name="para1"></textarea>
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="para1_update" value="para1_update">UPDATE</button></center>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Paragraph2</h4></label>
                                <textarea class="form-control" name="para2"></textarea>
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="para2_update" value="para2_update">UPDATE</button></center>
                            </div>
                            </form>
                    
                       <div class="card-body border-top"></div>
                 </div>
             </div>
        </div><!--end section-->
    </div>

        <!--content section start-->
        <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >Section 3</h3></CENTER>
                    <div class="card-body">
                        <form action= "" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Image</h4></label>
                                <input type="file" class="form-control" name="img2">
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="img_update2" value="img_update2">UPDATE</button></center>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Update Heading</h4></label>
                                <input type="text" class="form-control" name="text2">
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="hd_upd1" value="hd_upd1">UPDATE</button></center>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Step 1</h4></label>
                                <input type="text" class="form-control" name="step1">
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="upd_step1" value="upd_step1">UPDATE</button></center>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Step 2</h4></label>
                                <input type="text" class="form-control" name="step2">
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="upd_step2" value="upd_step2">UPDATE</button></center>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Step 3</h4></label>
                                <input type="text" class="form-control" name="step3">
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="upd_step3" value="upd_step3">UPDATE</button></center>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Step 4</h4></label>
                                <input type="text" class="form-control" name="step4">
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="upd_step4" value="upd_step4">UPDATE</button></center>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Step 5</h4></label>
                                <input type="text" class="form-control" name="step5">
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="upd_step5" value="upd_step5">UPDATE</button></center>
                            </div>

                             <div class="form-group">
                                <label class="col-form-label"><h4 class="text-dark">Area Of Services</h4></label>
                                <input type="text" class="form-control" name="area">
                                <br>
                                <center><button class="btn btn-outline-dark" type="submit" name="insert_area" value="insert_area">INSERT</button></center><br>

                            <?php 
                            include('../conn_db/conn.php');


                            $query="select * from services_area  ";
                            $run=mysqli_query($conn,$query);
                            while($row=mysqli_fetch_array($run)){
                                $serial=$row['id'];
                                $service=$row['area'];
                            


                            ?>

                           

                                <table width="100%" border="1px" class="table table-responsive-sm table-responsive-lg">
                                    <tr>
                                        <td width="90%"><?php  echo $service; ?></td>
                                        <td><a href="delete.php?delete=<?php echo $serial;?>" class="btn btn-outline-dark "> DELETE </a></td>
                                    </tr>
                                </table>
                                    
                                <?php  } ?>
                            </div>

                            </form>
                    
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
