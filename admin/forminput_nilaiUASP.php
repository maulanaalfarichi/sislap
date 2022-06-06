<?php 
$title="Form Data Nilai UAS Provinsi";
$page="Data Nilai UAS";
include ("../masterpages/admin.header.php");
include '../config/koneksi.php';
// data siswa
$id     = $_GET['id'];
$query_siswa  = mysqli_query($connect, "SELECT * FROM data_siswa WHERE id=$id");
$data_siswa   = mysqli_fetch_array($query_siswa);
$tahun_ajaran    = $data_siswa['tahun_ajaran'];
$nis    = $data_siswa['nis'];
// data siswa
$query_mapeluasp  = mysqli_query($connect,"SELECT * FROM angkatan_lulus, mata_pelajaran WHERE angkatan_lulus.kode_pelajaran = mata_pelajaran.kode_pelajaran AND angkatan_lulus.tahun_ajaran='$tahun_ajaran' AND angkatan_lulus.status='1'");
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
                  <h4 class="card-title" align="center">Form Data Nilai UAS Provinsi</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table</code>
                  </p> -->
                  <!-- content card -->
                  <form class="forms-sample" action="../functions/nilaiUASP_insert.php?id=<?= $id?>" method="POST">
                    <?php foreach ($query_mapeluasp as $Index=>$data_mapel): ?>
                      <div class="form-group">
                        <label for="nilai_uasp"><?= $data_mapel['mata_pelajaran'] ?></label>
                        <input type="hidden" name="kode_pelajaran[]" value="<?= $data_mapel['kode_pelajaran'] ?>">
                        <input type="hidden" name="nis[]" value="<?= $nis ?>">
                        <input type="text" class="form-control" name="nilai[]" id="nilai" placeholder="nilai <?= $data_mapel['mata_pelajaran'] ?>">
                      </div>
                      <?php endforeach; ?>
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