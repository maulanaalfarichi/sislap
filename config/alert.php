<?php
// batas tes
if (isset($_SESSION['alert'])) {
  // awal copy
  if ($_SESSION['alert']=='login') {
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
  }
  // batas copy
  // awal copy
  if ($_SESSION['alert']=='insert') {
   ?>
      <script type="text/javascript">
       swal({
         text: "Data berhasil tersimpan",
          icon: "success",
          buttons: false,
          timer: 3000,
       });
     </script>
   <?php
  }
  // batas copy
  // awal copy
  if ($_SESSION['alert']=='update') {
   ?>
      <script type="text/javascript">
       swal({
         text: "Data berhasil diubah",
          icon: "success",
          buttons: false,
          timer: 3000,
       });
     </script>
   <?php
  }
  // batas copy
  // awal copy
  if ($_SESSION['alert']=='delete') {
   ?>
      <script type="text/javascript">
       swal({
         text: "Data berhasil dihapus",
          icon: "warning",
          buttons: false,
          timer: 3000,
       });
     </script>
   <?php
  }
  // batas copy
  unset($_SESSION['alert']);
}
 ?>