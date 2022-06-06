<?php 
$title="Table Daftar Data Angkatan Kelulusan";
$page="Data Angkatan Lulus";
// include ('../config/session.php');
include ("../masterpages/admin.header.php");
require_once '../config/koneksi.php';
$query = mysqli_query($connect, "SELECT * FROM tahun_lulus");
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
                  <h4 class="card-title" align="center">Tabel Daftar Angkatan Yang Telah Lulus</h4>
                  <br>
                  <a href="forminput_angkatanLulus.php" class="btn btn-success btn-sm"> Tambah Angkatan</a>
                  <br>
                  <br>
                  <br>
                  <!-- content card -->
                  <table class="table table-striped table-bordered"  id="table_id"> 
                    <thead align="center">
                      <th>No</th>
                      <th>Tahun Ajaran</th>
                      <th>Aksi</th>                      
                    </thead>
                    <tbody>
                      <?php foreach ($query as $Index=>$Data): ?>
                      <tr>
                        <td align="center"><?= $Index+1 ?></td>
                        <td><?= $Data['tahun_ajaran'] ?>
                        </td>
                        <td align="center">
                          <!-- <a href="formedit_angkatanLulus.php?id=<?= $Data['id'] ?>" class="none-decoration">
                            <button class="btn btn-xs btn-info">Edit</button>
                          </a> -->
                          <a onclick="hapus('<?= $Data['id'] ?>')" style="color: #FFF" class="btn btn-xs btn-danger">Hapus
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                            
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
  }
});
</script>
<script type="text/javascript">
function hapus(id)
{
  swal({
  title: "Apakah anda Yakin?",
  text: "Data akan terhapus secara permanen!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = '../functions/angkatanlulus_delete.php? id='+id;
  } else {
    swal("Data tidak terhapus!");
  }
});
}
</script>