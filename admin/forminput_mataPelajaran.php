<?php 
$title="Form Data Mata Pelajaran";
$page="Mata Pelajaran";
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
                  <h4 class="card-title">Form Data Mata Pelajaran</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table</code>
                  </p> -->
                  <!-- content card -->
                  <form class="forms-sample" action="../functions/mataPelajaran_insert.php" method="POST">
                      <div class="form-group">
                        <label for="kode_pelajaran">Kode Mata Pelajaran</label>
                        <input type="text" class="form-control" name="kode_pelajaran" id="kode_pelajaran" placeholder="Kode Mata Pelajaran">
                      </div>
                      <div class="form-group">
                        <label for="mata_pelajaran">Mata Pelajaran</label>
                        <input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran" placeholder="Mata Pelajaran">
                      </div>
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