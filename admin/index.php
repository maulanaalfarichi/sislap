<?php 
// $title="Menu Utama";
$title="Beranda e-Bisa";
$page="menu_utama";
// include ('../config/session.php');
include ("../masterpages/admin.header.php");
?>
<body>
  <?php 
  include '../config/alert.php'; ?>
  
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
                  <h4 class="card-title">e-Bisa</h4>
                  <p class="card-description">
                    <!-- Add class <code>.table</code> -->
                  </p>
                  <!-- content card -->
                  Buku Induk siswa adalah rekaman kegiatan siswa yang masih aktif ataupun yang telah lulus.Catatan dalam buku induk harus jelas, dan ini merupakan tanggung jawab Sekolah. <br><br>
                  Semua data yang berhubungan dengan siswa semasa aktif selama ini masih menggunakan cara manual/konvensional yang akan ditata oleh Dinas Arsip dan Perpustakaan Daerah Kota Banjarbaru melalui Seksi Kearsipan Statis dengan menggunakan Media Elektronik yaitu Elektronik Buku Induk Siswa  ( e-BISA) .
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