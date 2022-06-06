<?php 
$title="Tabel Daftar Data Siswa";
// $title="Table Data Siswa";
$page="Data Siswa";
// include ('../config/session.php');
include ('../config/tanggal_indo.php');
include ("../masterpages/admin.header.php");
require_once '../config/koneksi.php';
$query = mysqli_query($connect, "SELECT * FROM data_siswa ORDER BY nis ASC");
?>
<body>
  <?php
if (isset($_SESSION['alert'])) {
  ?>
  <script type="text/javascript">
   swal({
     text: "Anda berhasil masuk sebagai admin",
      icon: "success",
      buttons: false,
      timer: 3000,
   });
 </script>
  <?php
  if ($_SESSION['alert']=='login_berhasil') {
    unset($_SESSION['alert']);
  }
}
 ?>
  
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
                  <h4 class="card-title">Tabel Data Siswa</h4>
                  <!-- content card -->
                  <div align="right">
                    <!-- <a href="formcetak_bukuinduk.php" class="btn btn-success">Cetak Data Siswa</a> -->
                    <a href="forminput_dataSiswa.php" class="btn btn-info">Tambah Data</a>
                  </div>
                  <br>
                  <table width="100%" class="table table-striped table-bordered"  id="table_id"> 
                    <thead style="text-align: center;">
                      <th>#</th>
                      <th>NIS</th>
                      <th>NISN</th>
                      <th>Nama Siswa</th>
                      <th>Tempat/Tanggal Lahir</th>
                      <th>Tahun Lulus</th>
                      <th>Aksi</th>                      
                    </thead>
                    <tbody>
                      <?php foreach ($query as $Index=>$Data): ?>
                        <tr>
                          <td align="center"><?= $Index+1 ?></td>
                          <td align="center"><?= $Data['nis'] ?></td>
                          <td align="center"><?= $Data['nisn'] ?></td>
                          <td><?= $Data['nama_lengkap'] ?></td>
                          <td><?= $Data['tempat_lahir'].", ".TanggalIndo($Data['tanggal_lahir']) ?></td>
                          <td><?= $Data['tahun_ajaran'] ?></td>
                          <td align="center">
                            <a href="detail_dataSiswa.php?id=<?= $Data['id'] ?>" class="btn btn-xs btn-success">Info</a>
                            <a target="blank"  href="cetak_dataSiswa.php?id=<?= $Data['id'] ?>" class="btn btn-xs btn-info">Cetak</a>
                            <a href="formedit_dataSiswa.php?id=<?= $Data['id'] ?>" class="btn btn-xs btn-warning">Edit</a>
                            <a onclick="hapus('<?= $Data['id'] ?>')" style="color: #FFF" class="btn btn-xs btn-danger">Hapus</a>
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
  },
  rowReorder: {
        selector: 'td:nth-child(4)'
        },
        responsive: true
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
    window.location = '../functions/dataSiswa_delete.php? id='+id;
  } else {
    swal("Data tidak terhapus!");
  }
});
}
</script>