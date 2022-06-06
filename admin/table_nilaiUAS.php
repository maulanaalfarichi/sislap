<?php 
// $title="Menu Utama";
$page="Data Nilai UAS";
// include ('../config/session.php');
include ("../masterpages/admin.header.php");
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
                  <h4 class="card-title">Tabel Data Nilai UAS</h4>
                  <!-- content card -->
                  <table width="100%" class="table table-striped table-bordered"  id="table_id"> 
                    <thead>
                      <th>NIS</th>
                      <th>Nama Siswa</th>
                      <th>Tahun Lulus</th>
                      <th>Nilai Rata-Rata</th>
                      <th>Aksi</th>                      
                    </thead>
                    <tbody>
                      <?php 
                      for ($i=0; $i < 50 ; $i++) { 
                        ?>
                      <tr>
                        <td>12345<?php echo $i+1; ?></td>
                        <td>Ahmad Syauqi</td>
                        <td>2011/2012</td>
                        <td>99</td>
                        <td></td>
                      </tr>
                      <?php 
                       } ?>
                      
                    </tbody>
                  </table>
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
<script type="text/javascript">
$(document).ready(function() {
  $('#table_id').DataTable();
});
//bahasa
$('#table_id').DataTable({
  language: {
    processing: "Sedang memproses...",
    search: "Cari Data&nbsp&nbsp;:&nbsp",
    lengthMenu: "Tampilkan _MENU_ data",
    info: "(&nbsp Menampilkan _START_ sampai _END_, dari _TOTAL_ data &nbsp)",
    infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
    infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
    infoPostFix: "",
    zeroRecords: "Tidak ditemukan data yang sesuai",
    paginate: {
      previous: "Sebelumnya&nbsp",
      next: "&nbspSelanjutnya",
    }
  },
  rowReorder: {
        selector: 'td:nth-child(4)'
        },
        responsive: true
});
</script>