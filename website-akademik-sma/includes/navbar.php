<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="container">

    <a class="navbar-brand" href="#">AKADEMIK-SMA</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <?php if(isset($_SESSION['verified_admin'])) : ?>

          
            <li class="nav-item">
                  <a class="nav-link" href="home.php">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Data Master
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="data-guru.php">Data Guru</a></li>
                  <li><a class="dropdown-item" href="data-siswa.php">Data Siswa</a></li>
                  <li><a class="dropdown-item" href="data-mapel.php">Data Mapel</a></li>
                  <li><a class="dropdown-item" href="data-kelas.php">Data Kelas</a></li>
                  <li><a class="dropdown-item" href="data-jadwal.php">Data Jadwal</a></li>
                  <li><a class="dropdown-item" href="data-nilai.php">Data Nilai</a></li>
                  <li><a class="dropdown-item" href="user-list.php">Data Akun</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="daftar.php">Buat Akun</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="lihat-saran.php">Kotak Saran</a>  
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admin-akses
                </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li></li>
                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                  </ul>
              </li>
              

          <?php elseif(isset($_SESSION['verified_guru'])) : ?>

            <li class="nav-item">
                  <a class="nav-link" href="home.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="data-nilai.php">Input Nilai</a>  
              </li>
              <li class="nav-item">
                <a class="nav-link" href="jadwal-guru.php">Jadwal</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Guru-akses
                </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li></li>
                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                  </ul>
              </li>

          <?php elseif(isset($_SESSION['verified_siswa'])) : ?>

              <li class="nav-item">
                  <a class="nav-link" href="home.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="jadwal-siswa.php">Jadwal</a>  
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kotak-saran.php">Kotak Saran</a>  
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Siswa-akses
                </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li></li>
                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                  </ul>
              </li>

          <?php elseif(!isset($_SESSION['verified_user_id'])) : ?>

              <li class="nav-item">
                <a class="nav-link" href="login.php"></a>
              </li>

          <?php else : ?>

              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>

          <?php endif; ?>
            
        </div>
  </div>
</nav>