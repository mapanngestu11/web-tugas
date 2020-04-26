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
                         Kegiatan Warga
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					
					  <li class="active">Kegiatan Warga</li>
					</ol> 
									
		</div>
            <div id="page-inner"> 
				 
				
			<div class="row">

			  <div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				 Tabel Kegiatan Warga
				 <br>
				 <br>
				<!--  <button align="left"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Tambah Kegiatan</button> -->
				 <br>
				 <br>

				 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Kegiatan </th>
                         
                          <th>Tanggal</th>
                          <th>Rincian Acara</th>
                          
                         
                        </tr>
                      </thead>
                      <tbody>
                  <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from kegiatan");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['nama_kegiatan']; ?></td>
                     
                      <td><?php echo $d['tgl']; ?></td>
                      <td><?php echo $d['rincian']; ?></td>
                   

                      

                    </tr>
                    <?php 
                  }
                  ?>
                     </table>
                      <script src="assets/js/datatables.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $('#dataTable').DataTable()
    </script>
						
				</div>        
							
							
				</div>
			</div>						
				</div>								
									
				  
                 <!-- /. ROW  -->
				 	
                <!-- /. ROW  -->
                
                 <!-- /. ROW  -->
                
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <form action="proses-kegiatan.php" method="post">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah Kegiatan</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                          	<div class="col-md-6">
                                          		<label>Nama Kegitan</label>
                                          		<input type="text" name="nama_kegiatan" class="form-control" required>
                                          	</div>
                                          	<div class="col-md-6">
                                          		<label>Tanggal</label>
                                          		<input type="date" name="tgl" class="form-control" required>
                                          	</div>
                                          	
                                          </div>
                                          <br>
                                           <div class="row">
                                           	<div class="col-md-9">
                                           	 <label>Rincian Kegiatan </label>
                                           	 <textarea name="rincian" class="form-control" required></textarea>
                                           	 </div>
                                           </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                <!-- /. ROW  -->
                </div>
				<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p></footer>
				</div>
             <!-- /. PAGE INNER  -->
            </div>
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
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
 
</body>
</html>
