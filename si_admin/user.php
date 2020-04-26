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
                        Data user
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					
					  <li class="active">Data user</li>
					</ol> 
									
		</div>
            <div id="page-inner"> 
				 
				
			<div class="row">

			  <div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				Data user
				  <br>
         <br>
         <button align="left"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Tambah user</button>
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <form action="proses-user.php" method="post">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah User/h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <label>Username</label>
                                              <input type="text" name="username" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                              <label>Password</label>
                                              <input type="text" name="password" class="form-control" required>
                                            </div>
                                            
                                          </div>
                                          <div class="row">
                                             <div class="col-md-6">
                                              <label>Level</label>
                                              <select name="level" class="form-control" required>
                                                <option value="">--Pilih---</option>
                                                <option value="admin"> Admin </option>
                                                <option value="warga"> Warga </option>
                                              </select>
                                            </div>
                                          </div>
                                          <br>
                                           
                                          
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                
         <br>
         <br>

				 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Username</th>
                          <th>Level</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                  <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from user");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['username']; ?></td>
                       <td><?php echo $d['level']; ?></td>
                    

                      <td>
                        <a href="edit-user.php?id_user=<?php echo $d['id_user']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapus-user.php?id_user=<?php echo $d['id_user']; ?>" class="btn btn-danger btn-sm">Delete</a></td>

                    </tr>
                    <?php 
                  }
                  ?>
                     </table>
						
				</div>        
							
							
				</div>
			</div>						
				</div>								
									
				  
                 <!-- /. ROW  -->
				 	
                <!-- /. ROW  -->

                 <!-- /. ROW  -->
                
                <div class="row">
                    <div class="col-md-6">
                       
                     <!--  Modals-->
                    
                     <!-- End Modals-->
                
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
