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
                        Data Warga
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					
					  <li class="active">Data Warga</li>
					</ol> 
									
		</div>
            <div id="page-inner"> 
				 
				
			<div class="row">

			  <div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				Data Warga
				  <br>
         <br>
         <button align="left"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Tambah warga</button>
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <form action="proses-warga.php" method="post">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah Warga</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <label>Nama Kepala Keluarga</label>
                                              <input type="text" name="nama_kk" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                              <label>Nama Istri</label>
                                              <input type="text" name="nama_istri" class="form-control" required>
                                            </div>
                                            
                                          </div>
                                          <div class="row">
                                             <div class="col-md-6">
                                              <label>jumlah anak</label>
                                              <input type="number" name="jumlah_anak" class="form-control" required>
                                            </div>
                                          </div>
                                          <br>
                                           <div class="row">
                                            <div class="col-md-9">
                                             <label>alamat</label>
                                             <textarea name="alamat" class="form-control" required></textarea>
                                             </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-md-6">
                                              <label>Pekerjaan</label>
                                              <input type="text" name="pekerjaan" class="form-control" required>
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
                
         <br>
         <br>

				 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Kepala Keluarga </th>
                         
                          <th>Nama Istri</th>
                          <th>Jumlah Anak</th>
                          <th>Alamat</th>
                          <th>Pekerjaan</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                  <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from warga");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['nama_kk']; ?></td>
                     <td><?php echo $d['nama_istri']; ?></td>
                      <td><?php echo $d['jumlah_anak']; ?></td>
                      <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['pekerjaan']; ?></td>

                      <td>
                        <a href="edit-warga.php?id_warga=<?php echo $d['id_warga']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapus-warga.php?id_warga=<?php echo $d['id_warga']; ?>" class="btn btn-danger btn-sm">Delete</a></td>

                    </tr>
                    <?php 
                  }
                  ?>
                     </table>
						
				</div>
        <!-- modal edit -->
          <div class="modal fade" id="detailPO" tabindex="-1" role="dialog" aria-labelledby="Tambah Barang" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="Tambah Barang">Edit Data Warga</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="post" action="update-guru.php">
                  <div class="modal-body" id="bodyDetail">

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>     
              </div>
            </div>
          </div>
							
				</div>
			</div>						
				</div>
         <script type="text/javascript">

          $('.btn-detail').click(function(){
            $.get('edit-warga.php?id_warga='+$(this).data('id_warga'),function(data){
              console.log(data)
              $('#bodyDetail').html(data)
              $('#bodyDetail :input')
            })
          });

        </script>
 								
									
				  
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
