<?php 
$title="Detail Data Siswa";
$page="Data Siswa";
// include ('../config/session.php');
include ('../config/tanggal_indo.php');
include ("../masterpages/admin.header.php");

include '../config/koneksi.php';
// data siswa
$id     = $_GET['id'];
$query  = mysqli_query($connect, "SELECT * FROM data_siswa WHERE id=$id");
$data   = mysqli_fetch_array($query);
$nis    = $data['nis'];

// data orag tua dan wali murid 
$query1   = mysqli_query($connect, "SELECT * FROM data_ayah WHERE nis=$nis");
$data1    = mysqli_fetch_array($query1);
$query2   = mysqli_query($connect, "SELECT * FROM data_ibu WHERE nis=$nis");
$data2    = mysqli_fetch_array($query2);
$query3   = mysqli_query($connect, "SELECT * FROM data_wali WHERE nis=$nis");
$data3    = mysqli_fetch_array($query3);

// data nilai uas siswa
$query_nilairaport   = mysqli_query($connect, "SELECT * FROM nilai_raport, mata_pelajaran WHERE nilai_raport.nis='$nis' AND nilai_raport.kode_pelajaran = mata_pelajaran.kode_pelajaran");
$data_nilairaport    = mysqli_fetch_array($query_nilairaport);
$rowcount_raport     = mysqli_num_rows($query_nilairaport);

// data nilai uas siswa
$query_nilaiuas   = mysqli_query($connect, "SELECT * FROM nilai_uas, mata_pelajaran WHERE nilai_uas.nis='$nis' AND nilai_uas.kode_pelajaran = mata_pelajaran.kode_pelajaran");
$data_nilaiuas    = mysqli_fetch_array($query_nilaiuas);
$rowcount_uas     = mysqli_num_rows($query_nilaiuas);

// data nilai uas siswa
$query_nilaiuasp   = mysqli_query($connect, "SELECT * FROM nilai_uasp, mata_pelajaran WHERE nilai_uasp.nis='$nis' AND nilai_uasp.kode_pelajaran = mata_pelajaran.kode_pelajaran");
$data_nilaiuasp    = mysqli_fetch_array($query_nilaiuasp);
$rowcount_uasp     = mysqli_num_rows($query_nilaiuasp);

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
                  <h4 class="card-title" align="center">Data Siswa</h4>
                  <div align="right">
                    <a target="blank" href="cetak_dataSiswa.php?id=<?=$id?>" class="btn btn-success">Cetak Data</a> 
                    <a href="formedit_dataSiswa.php?id=<?=$id?>" class="btn btn-info">Edit Data</a> 
                  </div>
                  <br>
                  <br>
                  <table class="table table-bordered table-striped">
                    <tbody>
                      <tr>
                        <td width="30%" align="right"><b>NIS</b></td>
                        <td><?= $data['nis'] ?></td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>NISN</b></td>
                        <td><?= $data['nisn'] ?></td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Nomor Akta Kelahiran</b></td>
                        <td><?= $data['nomor_akta'] ?></td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Nama Lengkap / Nama Panggilan</b></td>
                        <td><?= $data['nama_lengkap'] ?> / <i><?= $data['nama_panggilan'] ?></i></td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Tempat, Tanggal Lahir</b></td>
                        <td><?= $data['tempat_lahir'].", ".TanggalIndo($data['tanggal_lahir']) ?></td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Jenis Kelamin</b></td>
                        <td>
                          <?php 
                            if ($data['jenis_kelamin']==1) {
                              echo "Laki-Laki";
                            }
                            else {
                              echo "Perempuan";
                            }
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Agama</b></td>
                        <td>
                          <?php 
                            if ($data['agama']==1) {
                              echo "Islam";
                            }
                            elseif ($data['agama']==2) {
                              echo "Katolok";
                            }
                            elseif ($data['agama']==3) {
                              echo "Kristen Protestan";
                            }
                            elseif ($data['agama']==4) {
                              echo "Hindu";
                            }
                            elseif ($data['agama']==5) {
                              echo "Budha";
                            }
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Kewarganegaraan</b></td>
                        <td>
                           <?php 
                            if ($data['kewarganegaraan']==1) {
                              echo "WNI";
                            }
                            else {
                              echo "WNA";
                            }
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Alamat</b></td>
                        <td><?= $data['alamat'] ?></td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Tahun Lulus</b></td>
                        <td><?= $data['tahun_ajaran'] ?></td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Nomor Ijazah</b></td>
                        <td><?= $data['nomor_ijazah'] ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" align="center">Data Orang Tua dan Wali Murid</h4>
                  <p class="card-description">
                    Data Ayah
                  </p>
                  <table class="table table-bordered table-striped">
                    <tbody>
                      <tr>
                        <td width="30%" align="right"><b>Nama</b></td>
                        <td><?= $data1['nama_ayah'] ?></td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Pendidikan Terakhir</b></td>
                        <td><?= $data1['pendidikan_ayah'] ?></td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Pekerjaan</b></td>
                        <td><?= $data1['pekerjaan_ayah'] ?></td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <p class="card-description">
                    Data Ibu
                  </p>
                  <table class="table table-bordered table-striped">
                    <tbody>
                      <tr>
                        <td width="30%" align="right"><b>Nama</b></td>
                        <td><?= $data2['nama_ibu'] ?></td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Pendidikan Terakhir</b></td>
                        <td><?= $data2['pendidikan_ibu'] ?></td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Pekerjaan</b></td>
                        <td><?= $data2['pekerjaan_ibu'] ?></td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <p class="card-description">
                    Data Wali Murid
                  </p>
                  <table class="table table-bordered table-striped">
                    <tbody>
                      <tr>
                        <td width="30%" align="right"><b>Nama</b></td>
                        <td><?= $data3['nama_wali'] ?></td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Pendidikan Terakhir</b></td>
                        <td><?= $data3['pendidikan_wali'] ?></td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Pekerjaan</b></td>
                        <td><?= $data3['pekerjaan_wali'] ?></td>
                      </tr>
                      <tr>
                        <td width="30%" align="right"><b>Hubungan Keluarga</b></td>
                        <td><?= $data3['hubungan_keluarga'] ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
             <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="card-title">
                    Data Nilai Rata-Rata Raport 
                  </div>
                  <?php 
                  if ($rowcount_raport==0) {
                     ?>
                     <a href="forminput_nilaiRaport.php?id=<?= $data['id'] ?>" class="btn btn-success btn-sm"> Isi Nilai Raport</a>
                     <?php
                   } 
                   else {
                    ?>
                    <table class="table table-striped">
                    <?php foreach ($query_nilairaport as $Index=>$data_raport): ?>
                          <tr>
                            <td align="right" width="60%"><?= $data_raport['mata_pelajaran'] ?></td>
                            <td align="center"><?= $data_raport['nilai'] ?></td>                        
                          </tr>                      
                    <?php endforeach; ?>
                    </table>
                    <br>
                    <br>
                    <div align="right">
                      <a href="formedit_nilaiRaport.php?id=<?= $data['id'] ?>" class="btn btn-info btn-sm"> Edit Nilai Raport</a>
                      <br>
                      <br>
                      <a onclick="hapusraport('<?= $data['id'] ?>')" style="color: #FFF" class="btn btn-danger btn-sm"> Hapus Data</a>
                    </div>
                    <?php
                   }?>
                </div>
              </div>
            </div>
            <!-- data nilai uas  -->
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="card-title">
                    Data Nilai UAS 
                  </div>
                  <?php 
                  if ($rowcount_uas==0) {
                     ?>
                     <a href="forminput_nilaiUAS.php?id=<?= $data['id'] ?>" class="btn btn-success btn-sm"> Isi Nilai UAS</a>
                     <?php
                   } 
                   else {
                    ?>
                    <table class="table table-striped">
                    <?php foreach ($query_nilaiuas as $Index=>$data_uas): ?>
                          <tr>
                            <td align="right" width="60%"><?= $data_uas['mata_pelajaran'] ?></td>
                            <td align="center"><?= $data_uas['nilai'] ?></td>                        
                          </tr>                      
                    <?php endforeach; ?>
                    </table>
                    <br>
                    <br>
                    <div align="right">
                      <a href="formedit_nilaiUAS.php?id=<?= $data['id'] ?>" class="btn btn-info btn-sm"> Edit Nilai UAS</a>
                      <br>
                      <br>
                      <a onclick="hapusuas('<?= $data['id'] ?>')" style="color: #FFF" class="btn btn-danger btn-sm"> Hapus Data</a>
                    </div>
                    <?php
                   }?>
                </div>
              </div>
            </div>
            <!-- data nilai uas provinsi -->
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="card-title">
                    Data Nilai UAS Provisnsi
                  </div>
                  <?php 
                  if ($rowcount_uasp==0) {
                     ?>
                     <a href="forminput_nilaiUASP.php?id=<?= $data['id'] ?>" class="btn btn-success btn-sm"> Isi Nilai UAS Provinsi</a>
                     <?php
                   } 
                   else {
                    ?>
                    <table class="table table-striped">
                    <?php foreach ($query_nilaiuasp as $Index=>$data_uasp): ?>
                          <tr>
                            <td align="right" width="60%"><?= $data_uasp['mata_pelajaran'] ?></td>
                            <td align="center"><?= $data_uasp['nilai'] ?></td>                        
                          </tr>                      
                    <?php endforeach; ?>
                    </table>
                    <br>
                    <br>
                    <div align="right">
                      <a href="formedit_nilaiUASP.php?id=<?= $data['id'] ?>" class="btn btn-info btn-sm"> Edit Nilai UAS Provinsi</a>
                      <br>
                      <br>
                      <a onclick="hapusuasp('<?= $data['id'] ?>')" style="color: #FFF" class="btn btn-danger btn-sm">Hapus Data</a>
                    </div>
                    <?php
                   }?>
                </div>
              </div>
            </div>

          </div>
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

<!-- js untuk delete -->
<script>
function hapusraport(id)
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
    window.location = '../functions/nilaiRaport_delete.php? id='+id;
  } else {
    swal("Data tidak terhapus!");
  }
});
}
</script>
<script>
function hapusuas(id)
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
    window.location = '../functions/nilaiUAS_delete.php? id='+id;
  } else {
    swal("Data tidak terhapus!");
  }
});
}
</script>
<script>
function hapusuasp(id)
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
    window.location = '../functions/nilaiUASP_delete.php? id='+id;
  } else {
    swal("Data tidak terhapus!");
  }
});
}
</script>
</html>