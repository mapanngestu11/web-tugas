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
              <!--   <button align="left"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Tambah warga</button> -->
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
          <?php 
          include 'koneksi.php';
          ?>
          <?php
          $id_warga=$_GET['id_warga'];
          $det=mysqli_query($koneksi,"select * from warga where id_warga='$id_warga'")or die(mysqli_error($koneksi));
          while($d=mysqli_fetch_array($det)){
            ?>    

            <form action="update-warga.php"  method="post">
              <input type="text" name="id_warga" value="<?php echo $d['id_warga'];?>" hidden>
              <div class="row">
                <div class="col-md-6">
                  <label>Nama Kepala Keluarga</label>
                  <input type="text" name="nama_kk" class="form-control" value="<?php echo $d['nama_kk'];?>"required>
                </div>
                <div class="col-md-6">
                  <label>Nama Istri</label>
                  <input type="text" name="nama_istri" class="form-control" value="<?php echo $d['nama_istri'];?>"required>
                </div>
              </div>
              <div class="row">
               <div class="col-md-6">
                <label>Jumlah anak</label>
                <input type="text" name="jumlah_anak" class="form-control" value="<?php echo $d['jumlah_anak'];?>"required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-9">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" value="<?php echo $d['alamat'];?>" required></textarea>
              </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Pekerjaan</label>
                  <input type="text" name="pekerjaan" class="form-control" value="<?php echo $d['pekerjaan'];?>"required>
                </div>
              </div>
              <br>
              <button type="submit" class="btn btn-warning">Ubah Data</button>
            </div>
          </div>
        </form>


        <?php } ?>
      </div>
      <!-- modal edit -->


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
