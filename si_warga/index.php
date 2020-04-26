<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include 'page/head.php'; ?>

<body>
    <div id="wrapper">
          <?php include 'page/top_bar.php'; ?>
        <!--/. NAV TOP  -->
        <?php include 'page/side_bar.php'; ?>
         
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Dashboard <small></small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Dashboard</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->
	
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
						<?php 
			                      include 'koneksi.php';
			                      $query = "SELECT * FROM warga";
			                      $hasil = mysqli_query($koneksi,$query);
			                      $data  = mysqli_num_rows($hasil);
                      			?>
							<h3>
								<h3><?php echo $data; ?></h3>
                                <hr>
								<small>Kepala Keluarga</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-users fa-5x red"></i>
						</div>
		 
                        </div>
						</div>
                    </div>
					
					      
					
					       <div class="col-md-6 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
						<?php 
			                      include 'koneksi.php';
			                      $query = "SELECT * FROM kegiatan";
			                      $hasil = mysqli_query($koneksi,$query);
			                      $data  = mysqli_num_rows($hasil);
                      			?>
							<h3>
								<h3><?php echo $data;?></h3>
                                <hr>
								<small>jumlah kegiatan</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-file fa-5x green"></i>
						</div>
		 
                        </div>
						</div>
                    </div>
					
					       
				   
                </div>
				     <div class="row">
                        
                       
                    </div>
				
		
		</div><!--/.row-->
			
		
				<div class="row">
				
					</div>		
					
						<div class="col-md-7">
				  
					</div>
					
				</div> 
			 
				
				
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                       
                    </div>
                    

                </div>
		 	
                <!-- /. ROW  -->

	   
				
				
				
                
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 

</body>

</html>