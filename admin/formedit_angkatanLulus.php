<?php 
$title="Form Edit Data Angkatan Kelulusan";
$page="Data Angkatan Lulus";
include ("../masterpages/admin.header.php");
include '../config/koneksi.php';
$query = mysqli_query($connect, "SELECT * FROM mata_pelajaran");
?>
<body>
  <div class="container-scroller">
  	<!-- masterpages navbar -->
    <?php include ("../masterpages/admin.navbar.php"); ?>
    <!-- masterpages navbar -->
    <div class="container-fluid page-body-wrapper">
    	<!-- masterpages sidebar -->
      	<?php include("../masterpages/admin.sidebar.php"); ?>
      	<!-- masterpages sidebar -->
      	<!-- main panel -->
      <div class="main-panel">
        <div class="content-wrapper">
        	<!-- content page -->
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Data Angkatan Yang Telah Lulus</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table</code>
                  </p> -->
                  <!-- content card -->
                  <form class="forms-sample" action="../functions/angkatanLulus_insert.php" method="POST">
                      <div class="form-group">
                        <label for="tahun_ajaran">Tahun Ajaran</label>
                        <input type="text" class="form-control" name="tahun_ajaran" id="tahun_ajaran" placeholder="Tahun Ajaran ( contoh penulisan 2000/2001)">
                      </div>
                      <br>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="mata_pelajaran">Mata Pelajaran UAS</label>
                              <?php foreach ($query as $Index=>$Data): ?>
                              <div class="form-check form-check-flat">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="mapel_uas[]" value="<?= $Data['kode_pelajaran'] ?>"><?= $Data['mata_pelajaran'] ?>
                                </label>
                              </div>
                              <?php endforeach; ?>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="mata_pelajaran">Mata Pelajaran UAS Provinsi</label>
                              <?php foreach ($query as $Index=>$Data): ?>
                              <div class="form-check form-check-flat">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="mapel_uasp[]" value="<?= $Data['kode_pelajaran'] ?>"><?= $Data['mata_pelajaran'] ?>
                                </label>
                              </div>
                              <?php endforeach; ?>
                            </div>
                          </div>
                        </div>
                      <br>
                      <button type="submit" class="btn btn-success">Submit</button>
                      <button type="reset" class="btn btn-light">Reset</button>
                  </form>
                  <!-- batas content card -->
                </div> <!-- card body -->
              </div> <!-- card -->
            </div> <!-- col-md-12 -->
          </div> <!-- row -->
        </div> <!-- content wrapper -->
        <!-- content-wrapper ends -->
        <?php include("../masterpages/admin.footer.php"); ?>
      </div> <!-- main panel -->
      <!-- main-panel ends -->
    </div> <!--  container-fluid page-body-wrapper -->
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <?php include("../masterpages/admin.plugins.php"); ?>
  <!-- plugins:js -->
</body>
</html>