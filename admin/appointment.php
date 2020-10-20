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
                        <h1>APPOINTMENT </h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">

            <div class="row">         
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h3 class="card-header" style= "color:black;"   >BOOKED APPOINTMENT</h3></CENTER>
                    <div class="card-body">
                       
                       	<?php 
                            include('../conn_db/conn.php');


                            $query="select * from securemail_data  ";
                            $run=mysqli_query($conn,$query);
                            while($row=mysqli_fetch_array($run)){
                                $serial=$row['id'];
                                $frm=$row['mail_from'];
                                $sub=$row['subject'];
                                $ph=$row['ph_no'];
                            


                            ?>

                           

                                <table width="100%" border="1px" class="table table-responsive-sm table-responsive-lg">
                                    <tr>
                                        <td width="40%"><?php  echo $frm; ?></td>
                                        <td width="20%"><?php  echo $sub; ?></td>
                                        <td width="20%"><?php  echo $ph; ?></td>
                                        <td><a href="delete_booking.php?delete=<?php echo $serial;?>" class="btn btn-outline-dark "> DELETE </a></td>
                                    </tr>
                                </table>
                                    
                                <?php  } ?>
                       
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