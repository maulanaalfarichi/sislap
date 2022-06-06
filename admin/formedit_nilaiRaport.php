<?php 
$title="Form Edit Data Nilai Rata-Rata Raport";
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
$query_nilaiuasp  = mysqli_query($connect,"SELECT * FROM nilai_raport, mata_pelajaran WHERE nilai_raport.nis='$nis' AND nilai_raport.kode_pelajaran = mata_pelajaran.kode_pelajaran");
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
                  <h4 class="card-title" align="center">Form Data Nilai Rata-Rata Raport</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table</code>
                  </p> -->
                  <!-- content card -->
                  <form class="forms-sample" action="../functions/nilaiRaport_update.php?id=<?= $id?>" method="POST">
                    <input type="hidden" name="nis" value="<?=$nis?>">
                    <?php foreach ($query_nilaiuasp as $Index=>$data_uasp): ?>
                      <div class="form-group">
                        <label for="nilai_raport"><?= $data_uasp['mata_pelajaran'] ?></label>
                        <input type="hidden" name="kode_pelajaran[]" value="<?= $data_uasp['kode_pelajaran'] ?>">
                        <input type="text" class="form-control" name="nilai[]" id="nilai" placeholder="nilai <?= $data_uasp['mata_pelajaran'] ?>" value="<?= $data_uasp['nilai'] ?>">
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