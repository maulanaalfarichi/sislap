      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="../assets/images/faces-clipart/pic-4.png" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="designation">Admin</p>
                <div class="badge badge-teal mx-auto mt-3 btn" onclick="logout()">Log out</div>
              </div>
            </div>
          </li>
          <li class="nav-item <?php if($page=="menu_utama"){ echo "active";}; ?>"><a class="nav-link" href="../admin/index.php"><img class="menu-icon" src="../assets/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">Menu Utama</span></a></li>
          <li class="nav-item <?php if($page=="input_datasiswa"){ echo "active";}; ?>"><a class="nav-link" href="../admin/forminput_dataSiswa.php"><img class="menu-icon" src="../assets/images/menu_icons/04.png" alt="menu icon"><span class="menu-title">Input Data Siswa</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../admin/table_datasiswa.php"><img class="menu-icon" src="../assets/images/menu_icons/06.png" alt="menu icon"><span class="menu-title">Data Siswa</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../admin/table_angkatanlulus.php"><img class="menu-icon" src="../assets/images/menu_icons/05.png" alt="menu icon"><span class="menu-title">Data Angkatan Lulus</span></a></li>  
           <li class="nav-item"><a class="nav-link" href="../admin/table_matapelajaran.php"><img class="menu-icon" src="../assets/images/menu_icons/06.png" alt="menu icon"><span class="menu-title">Data Mata Pelajaran</span></a></li> 
        </ul>
      </nav>
      
      <script type="text/javascript">
        function logout()
        {
          swal({
          text: "Apakah anda yakin untuk keluar dari aplikasi ini!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = '../config/logout.php';
          } 
        });
        }
      </script>