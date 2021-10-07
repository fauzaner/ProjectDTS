<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="Project.css">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,600;1,700&family=Roboto+Slab:wght@500;700&family=Roboto:wght@300;700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Sistem Informasi | Home</title>
  </head>
  <body>
  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i>
      <img src="images/logo.png" style="width: 50px; height: 50px;"/>  
      Smansa.</i></b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
              Profil
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="profilesekolah/sambutan.php">Sambutan Kepala Sekolah &nbsp;<img src="https://img.icons8.com/pastel-glyph/64/000000/-chair.png" width="20" height="20"/></a></li>
              <li><a class="dropdown-item" href="profilesekolah/visimisi.php">Visi dan Misi &nbsp;<img src="https://img.icons8.com/ios-filled/50/000000/table.png" width="20" height="20"/></a></li>
              <li><a class="dropdown-item" href="profilesekolah/saranaprasarana.php">Sarana dan Prasarana &nbsp; <img src="https://img.icons8.com/ios-glyphs/30/000000/room.png" width="20" height="20"/></a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                Pendidik & Tenaga Pendidik
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="pendidiktenagapendidik/strukturorganisasisekolah.php">Struktur Organisasi Sekolah &nbsp;
                  <img src="https://img.icons8.com/ios-filled/50/000000/tree-structure.png" width="20" height="20"/></a>
                </li>
                <li>
                  <a class="dropdown-item" href="pendidiktenagapendidik/kepalasekolah.php">Kepala Sekolah &nbsp;
                  <img src="https://img.icons8.com/pastel-glyph/100/000000/school-director--v2.png" width="20" height="20"/></a>
                </li>
                <li>
                  <a class="dropdown-item" href="pendidiktenagapendidik/komitesekolah.php">Komite Sekolah &nbsp; 
                  <img src="https://img.icons8.com/ios-glyphs/30/000000/room.png" width="20" height="20"/></a>
                </li>
                <li>
                  <a class="dropdown-item" href="pendidiktenagapendidik/dataguru.php">Data Guru &nbsp; 
                  <img src="https://img.icons8.com/ios-filled/50/000000/teacher.png" width="20" height="20"/></a>
                </li>
                <li>
                  <a class="dropdown-item" href="pendidiktenagapendidik/datasiswa.php">Data Siswa &nbsp; 
                  <img src="https://img.icons8.com/ios-glyphs/30/000000/room.png" width="20" height="20"/></a>
                </li>
              </ul>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="ekstrakulikuler/ekstra.php">Extra Kulikuler</a>
          </li>
          <a class="btn tombol-button text-light" href="login/login.php" role="button">Login</a>
        </ul>
      </div>
    </div>
  </nav>

    <!-- End Navbar -->

  <!-- Pembuatan Lingkaran -->
  <div class="Lingkaran1 ">
  </div>
  <!-- Jumbotron -->
  
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="display-4">SMA NEGERI 2 </h1>
          <p class="kedua">MOJOKERTO</p>
          <p class="lead">Menjadi Sekolah Unggul dalam Imtaq, Iptek, Budi Pekerti, Peduli Lingkungan dan Berwawasan Internasional<br>
          </p>
          <a class="btn tombol-button1 text-light" href="profilesekolah/profile.php" role="button">&nbsp; Profil Sekolah &nbsp;<img src="https://img.icons8.com/ios-glyphs/30/000000/circled-chevron-right.png"/></a>
          <!-- <a class="btn tombol-button2 text-dark" href="#" role="button">&nbsp; Hubungi Kami &nbsp;<img src="https://img.icons8.com/ios-glyphs/30/000000/circled-chevron-right.png"/></a> -->
        </div>

      <!-- End Jumbotron -->
        <!-- Carousel -->
        <div class="col-md-6 mt-5">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded">
              <div class="carousel-item active">
                <img src="images\sepak bola3.jpg" class=" d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/header.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/bola voli4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- End Carousel -->



 <!-- Text Informasi -->
  <br><br>
  <h3 class="text-center text-bold">INFORMASI / BERITA</h3>
  <br><br>
  <!-- Akhir Informasi -->

  <!-- Card Berita -->
  <div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="images/SMK.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">INFORMASI</h5>
          <h6 class="card-keterangan">Diesnatalis ke-37 tahun SMAN 2 Mojokerto</h6>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <img src="https://img.icons8.com/color/96/000000/planner.png" width="30" height="30"/>
          <small class="text-muted">23 Maret 2020</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="images/basket.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">AKADEMIK</h5>
          <h6 class="card-keterangan">Diesnatalis ke-37 tahun SMAN 2 Mojokerto</h6>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a quam ligula. Maecenas non porta erat, vel posuere justo. Vestibulum non rhoncus nisl, sed pretium leo..</p>
          <img src="https://img.icons8.com/color/96/000000/planner.png" width="30" height="30"/>
          <small class="text-muted">23 Maret 2020</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="images/basket.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">AKADEMIK</h5>
          <h6 class="card-keterangan">Diesnatalis ke-37 tahun SMAN 2 Mojokerto</h6>
          <p class="card-text"> Integer ac massa suscipit nisl tincidunt malesuada. Duis eu faucibus elit, et fringilla felis. Morbi ac ante eget turpis bibendum pulvinar</p>
          <img src="https://img.icons8.com/color/96/000000/planner.png" width="30" height="30"/>
          <small class="text-muted">23 Maret 2020</small>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- end information -->
  <footer>
    <ul class="list-inline">
      <div class="container">
        <li class="list-inline-item">TENTANG KAMI
          <p>Sekolah Menengah Atas Negeri bertaraf internasional yang biasa disebut Buwitashakti</br></p>
        </li>
        <li class="list-inline-item">GET SOCIAL
          <p><a href="https://web.facebook.com/officialsman2mojokerto/"><img src="https://img.icons8.com/doodle/240/000000/facebook-new.png" width="30" height="30"/></a> &nbsp; 
          <a href=""><img src="https://img.icons8.com/doodle/240/000000/youtube-play--v2.png" width="30" height="30"/></a> &nbsp;
          <a href="https://www.instagram.com/sman2mojokerto/"><img src="https://img.icons8.com/doodle/240/000000/instagram--v1.png" width="30" height="30"/></a> &nbsp;
          <a href="download.php"><img src="https://img.icons8.com/fluency/48/000000/download-from-ftp.png" width="30" height="30"/></p>
        </li>
        <li class="list-inline-item list-contact">CONTACT INFO <br><br>
          <img src="https://img.icons8.com/doodle/96/000000/google-maps-new.png" width="30" height="30"/> &nbsp; JALAN AHMAD YANI N0. 1 JAWA TIMUR<br>
          <img src="https://img.icons8.com/doodle/96/000000/ringing-phone.png" width="30" height="30"/> &nbsp; (031) 457890<br>
          <img src="https://img.icons8.com/doodle/96/000000/gmail.png" width="30" height="30"/> &nbsp; INFO@SMAN2MOJOKERTO.SCH.ID
        </li>
      </div>
    </ul>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>