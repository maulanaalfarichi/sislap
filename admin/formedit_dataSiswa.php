<?php 
$title="Form Edit Data Siswa";
$page="input_datasiswa";
include ("../masterpages/admin.header.php");
require_once '../config/koneksi.php';
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

//tahun lulus
$query_tahunlulus = mysqli_query($connect, "SELECT * FROM tahun_lulus");
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
                  <h4 class="card-title">Form Data Siswa</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table</code>
                  </p> -->
                  <!-- content card -->
                  <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                      <div class="stepwizard-step col-xs-3">
                        <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                        <p><small>Data Siswa</small></p>
                      </div>
                      <div class="stepwizard-step col-xs-3">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p><small>Data Ayah Kandung</small></p>
                      </div>
                      <div class="stepwizard-step col-xs-3">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p><small>Data Ibu Kandung</small></p>
                      </div>
                      <div class="stepwizard-step col-xs-3">
                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                        <p><small>Data Wali Murid</small></p>
                      </div>
                    </div>
                  </div>
                  <!-- batas form -->
                  <form method="POST" action="../functions/dataSiswa_update.php?id=<?= $id?>" role="form">
                    <!-- batas step 1 -->
                    <div class="panel panel-primary setup-content" id="step-1">
                      <div class="panel-heading">
                        <h3 class="panel-title">Data Siswa</h3>
                      </div>
                      <br>
                      <div class="panel-body">
                        <div class="form-group">
                          <label for="nis">NIS</label>
                          <input type="text" class="form-control" name="nis" value="<?= $data['nis'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="nisn">NISN</label>
                          <input type="text" class="form-control" name="nisn" value="<?= $data['nisn'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="nomor_akta">Nomor Akta Kelahiran</label>
                          <input type="text" class="form-control" name="nomor_akta" id="nomor_akta" placeholder="Nomor akta kelahiran" value="<?= $data['nomor_akta'] ?>">
                        </div>
                        <!-- <div class="form-group">
                          <label for="foto_siswa">Foto Siswa</label>
                          <div class="input-group col-xs-12">
                            <input type="file" name="foto_siswa" class="form-control file-upload-info" placeholder="Upload Image">
                          </div>
                        </div> -->
                        <div class="form-group">
                          <label for="nama_lengkap">Nama Lengkap</label>
                          <input type="text" class="form-control" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="nama_panggilan">Nama Panggilan</label>
                          <input type="text" class="form-control" name="nama_panggilan" value="<?= $data['nama_panggilan'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="tempat_lahir">Tempat lahir</label>
                          <input type="text" class="form-control" name="tempat_lahir" value="<?= $data['tempat_lahir'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="tanggal_lahir">Tanggal Lahir</label>
                          <input type="date" class="form-control" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>">
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                          <div class="col-sm-4">
                            <div class="form-radio form-radio-flat">
                              <label class="form-check-label">
                                <input type="radio" <?= $data['jenis_kelamin'] == '1' ? 'checked' : '' ?> class="form-check-input" name="jenis_kelamin" value="1"> Laki-Laki
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-radio form-radio-flat">
                              <label class="form-check-label">
                                <input type="radio" <?= $data['jenis_kelamin'] == '2' ? 'checked' : '' ?> class="form-check-input" name="jenis_kelamin" value="2"> Perempuan
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="agama">Agama</label>
                          <select class="form-control form-control-lg" name="agama" id="agama">
                            <option value="1" <?= $data['agama'] == '1' ? 'selected' : '' ?> >Islam</option>
                            <option value="2" <?= $data['agama'] == '2' ? 'selected' : '' ?> >Katolik</option>
                            <option value="3" <?= $data['agama'] == '3' ? 'selected' : '' ?> >Kristen Potestan</option>
                            <option value="4" <?= $data['agama'] == '4' ? 'selected' : '' ?> >Hindu</option>
                            <option value="5" <?= $data['agama'] == '5' ? 'selected' : '' ?> >Budha</option>
                          </select>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kewarganegaraan</label>
                          <div class="col-sm-4">
                            <div class="form-radio form-radio-flat">
                              <label class="form-check-label">
                                <input type="radio" <?= $data['kewarganegaraan'] == '1' ? 'checked' : '' ?> class="form-check-input" name="kewarganegaraan" value="1"> WNI
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-radio form-radio-flat">
                              <label class="form-check-label">
                                <input type="radio" <?= $data['kewarganegaraan'] == '2' ? 'checked' : '' ?> class="form-check-input" name="kewarganegaraan" value="2"> WNA
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <textarea class="form-control" name="alamat" placeholder="alamat" rows="5"><?= $data['alamat'] ?></textarea>
                        </div>
                         <div class="form-group">
                          <label for="tahun_ajaran">Tahun Lulus</label>
                          <select class="form-control form-control-lg" name="tahun_ajaran" id="tahun_ajaran">

                            <?php
                                $tahun_ajaran_siswa = $data['tahun_ajaran']; 
                                foreach ($query_tahunlulus as $Index=>$Data_tahun): 
                              ?>
                            <option value="<?= $Data_tahun['tahun_ajaran'] ?>" <?= $Data_tahun['tahun_ajaran'] == $tahun_ajaran_siswa ? 'selected' : '' ?> ><?= $Data_tahun['tahun_ajaran'] ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="nomor_ijazah">Nomor Ijazah</label>
                          <input type="text" class="form-control" name="nomor_ijazah" value="<?= $data['nomor_ijazah'] ?>">
                        </div>
                        <input type="hidden" name="id_siswa" value="<?= $data['id'] ?>">
                        <button class="btn btn-primary nextBtn pull-right" type="button">Selanjutnya</button>
                      </div>
                    </div>
                    <!-- batas step 1 -->
                    <!-- batas step 2 -->
                    <div class="panel panel-primary setup-content" id="step-2">
                      <div class="panel-heading">
                        <h3 class="panel-title">Data Ayah Kandung</h3>
                      </div>
                      <br>
                      <div class="panel-body">
                        <div class="form-group">
                          <label for="nama_ayah">Nama Ayah</label>
                          <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama ayah kandung" value="<?= $data1['nama_ayah'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="pendidikan_ayah">Pendidikan Terakhir</label>
                          <input type="text" class="form-control" name="pendidikan_ayah" id="pendidikan_ayah" placeholder="Pendidikan terakhir ayah kandung" value="<?= $data1['pendidikan_ayah'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                          <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Pekerjaan ayah kandung" value="<?= $data1['pekerjaan_ayah'] ?>">
                        </div>
                        <input type="hidden" name="id_ayah" value="<?= $data1['id'] ?>">
                        <button class="btn btn-primary nextBtn pull-right" type="button">Selanjutnya</button>
                      </div>
                    </div>
                    <!-- batas step2 -->
                    <!-- batas step2 -->
                    
                    <div class="panel panel-primary setup-content" id="step-3">
                      <div class="panel-heading">
                        <h3 class="panel-title">Data Ibu Kandung</h3>
                      </div>
                      <br>
                      <div class="panel-body">
                        <div class="form-group">
                          <label for="nama_ibu">Nama Ibu</label>
                          <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu kandung" value="<?= $data2['nama_ibu'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="pendidikan_ibu">Pendidikan Terakhir</label>
                          <input type="text" class="form-control" name="pendidikan_ibu" id="pendidikan_ibu" placeholder="Pendidikan terakhir ibu kandung" value="<?= $data2['nama_ibu'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                          <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="" ="Pekerjaan ibu kandung" value="<?= $data2['pekerjaan_ibu'] ?>">
                        </div>
                        <input type="hidden" name="id_ibu" value="<?= $data2['id'] ?>">
                        <button class="btn btn-primary nextBtn pull-right" type="button">Selanjutnya</button>
                      </div>
                    </div>
                    <!-- batas step 3 -->
                    <!-- batas step 4 -->
                    <div class="panel panel-primary setup-content" id="step-4">
                      <div class="panel-heading">
                        <h3 class="panel-title">Data Wali Murid</h3>
                      </div>
                      <br>
                      <div class="panel-body">
                        <div class="form-group">
                          <label for="nama_wali">Nama Wali Murid</label>
                          <input type="text" class="form-control" name="nama_wali" id="nama_wali" placeholder="Nama wali murid" value="<?= $data3['nama_wali'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="pendidikan_wali">Pendidikan Terakhir</label>
                          <input type="text" class="form-control" name="pendidikan_wali" id="pendidikan_wali" placeholder="Pendidikan terakhir wali murid" value="<?= $data3['pendidikan_wali'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="pekerjaan_wali">Pekerjaan</label>
                          <input type="text" class="form-control" name="pekerjaan_wali" id="pekerjaan_wali" placeholder="Pekerjaan wali murid" value="<?= $data3['pekerjaan_wali'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="hubungan_keluarga">Hubungan Dengan Keluarga</label>
                          <input type="text" class="form-control" name="hubungan_keluarga" id="hubungan_keluarga" placeholder="Hubungan kekeluargaan" value="<?= $data3['hubungan_keluarga'] ?>">
                        </div>
                        <input type="hidden" name="id_wali" value="<?= $data3['id'] ?>">
                        <button class="btn btn-success pull-right" type="submit">Simpan</button>
                      </div>
                    </div>
                    <!-- batas step 4 -->
                  </form>
                  <!-- batas form -->
                  <!-- batas content card -->
                  </div> <!-- card body -->
                  </div> <!-- card -->
                  </div> <!-- col-md-12 -->
                </div>
              </div>
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
<script>
  $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});
</script>
</html>