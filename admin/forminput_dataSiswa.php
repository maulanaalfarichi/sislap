<?php 
$title="Form Data Siswa";
$page="input_datasiswa";
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
                  <form method="POST" action="../functions/dataSiswa_insert.php" role="form">
                    <!-- batas step 1 -->
                    <div class="panel panel-primary setup-content" id="step-1">
                      <div class="panel-heading">
                        <h3 class="panel-title">Data Siswa</h3>
                      </div>
                      <br>
                      <div class="panel-body">
                        <div class="form-group">
                          <label for="nis">NIS</label>
                          <input type="text" class="form-control" name="nis">
                        </div>
                        <div class="form-group">
                          <label for="nisn">NISN</label>
                          <input type="text" class="form-control" name="nisn">
                        </div>
                        <div class="form-group">
                          <label for="nomor_akta">Nomor Akta Kelahiran</label>
                          <input type="text" class="form-control" name="nomor_akta" id="nomor_akta" placeholder="Nomor akta kelahiran">
                        </div>
                        <!-- <div class="form-group">
                          <label for="foto_siswa">Foto Siswa</label>
                          <div class="input-group col-xs-12">
                            <input type="file" name="foto_siswa" class="form-control file-upload-info" placeholder="Upload Image">
                          </div>
                        </div> -->
                        <div class="form-group">
                          <label for="nama_lengkap">Nama Lengkap</label>
                          <input type="text" class="form-control" name="nama_lengkap">
                        </div>
                        <div class="form-group">
                          <label for="nama_panggilan">Nama Panggilan</label>
                          <input type="text" class="form-control" name="nama_panggilan">
                        </div>
                        <div class="form-group">
                          <label for="tempat_lahir">Tempat lahir</label>
                          <input type="text" class="form-control" name="tempat_lahir">
                        </div>
                        <div class="form-group">
                          <label for="tanggal_lahir">Tanggal Lahir</label>
                          <input type="date" class="form-control" name="tanggal_lahir">
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                          <div class="col-sm-4">
                            <div class="form-radio form-radio-flat">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="1"> Laki-Laki
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-radio form-radio-flat">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="2"> Perempuan
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="agama">Agama</label>
                          <select class="form-control form-control-lg" name="agama" id="agama">
                            <option value="1">Islam</option>
                            <option value="2">Katolik</option>
                            <option value="3">Kristen Potestan</option>
                            <option value="4">Hindu</option>
                            <option value="5">Budha</option>
                          </select>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kewarganegaraan</label>
                          <div class="col-sm-4">
                            <div class="form-radio form-radio-flat">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="kewarganegaraan" value="1"> WNI
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-radio form-radio-flat">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="kewarganegaraan" value="2"> WNA
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <textarea class="form-control" name="alamat" placeholder="alamat" rows="5"></textarea>
                        </div>
                         <div class="form-group">
                          <label for="tahun_ajaran">Tahun Lulus</label>
                          <select class="form-control form-control-lg" name="tahun_ajaran" id="tahun_ajaran">
                            <?php foreach ($query as $Index=>$Data): ?>
                            <option value="<?= $Data['tahun_ajaran'] ?>"><?= $Data['tahun_ajaran'] ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="nomor_ijazah">Nomor Ijazah</label>
                          <input type="text" class="form-control" name="nomor_ijazah">
                        </div>
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
                          <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama ayah kandung">
                        </div>
                        <div class="form-group">
                          <label for="pendidikan_ayah">Pendidikan Terakhir</label>
                          <input type="text" class="form-control" name="pendidikan_ayah" id="pendidikan_ayah" placeholder="Pendidikan terakhir ayah kandung">
                        </div>
                        <div class="form-group">
                          <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                          <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Pekerjaan ayah kandung">
                        </div>
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
                          <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu kandung">
                        </div>
                        <div class="form-group">
                          <label for="pendidikan_ibu">Pendidikan Terakhir</label>
                          <input type="text" class="form-control" name="pendidikan_ibu" id="pendidikan_ibu" placeholder="Pendidikan terakhir ibu kandung">
                        </div>
                        <div class="form-group">
                          <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                          <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="" ="Pekerjaan ibu kandung">
                        </div>
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
                          <input type="text" class="form-control" name="nama_wali" id="nama_wali" placeholder="Nama wali murid">
                        </div>
                        <div class="form-group">
                          <label for="pendidikan_wali">Pendidikan Terakhir</label>
                          <input type="text" class="form-control" name="pendidikan_wali" id="pendidikan_wali" placeholder="Pendidikan terakhir wali murid">
                        </div>
                        <div class="form-group">
                          <label for="pekerjaan_wali">Pekerjaan</label>
                          <input type="text" class="form-control" name="pekerjaan_wali" id="pekerjaan_wali" placeholder="Pekerjaan wali murid">
                        </div>
                        <div class="form-group">
                          <label for="hubungan_keluarga">Hubungan Dengan Keluarga</label>
                          <input type="text" class="form-control" name="hubungan_keluarga" id="hubungan_keluarga" placeholder="Hubungan kekeluargaan">
                        </div>
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