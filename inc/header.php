<?php 
  $dir = dirname($_SERVER['PHP_SELF']);
  $profile = false;
  $pendidik = false;
  $ekstra = false;
  if($dir === '/profilesekolah'){
    $profile = true;
  }elseif($dir === '/pendidiktenagapendidik'){
    $pendidik = true;
  }

  $eks = dirname($_SERVER['PHP_SELF']);
  if($eks === '/ekstrakulikuler'){
    $eks = basename($_SERVER['PHP_SELF'],'.php');
    $eks .= '.css';
    $ekstra = true;
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap4.min.css" rel="stylesheet">


    <!-- Font CSS -->
    <link href="../css/gfont.css'" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="<?php echo $ekstra === true ? "" : "../css/styleProfile.css"; ?>">
    <link rel="stylesheet" href="../css/<?php echo $ekstra === true ? "$eks" : ""; ?>">
    <title>Sistem Informasi Sekolah</title>
    
    </head>

  <body>

     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="../index.php"><i>
        <img src="../images/logo.png" style="width: 50px; height: 50px;"/>  
        Smansa.</i></b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../index.php">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                Profil
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="<?php echo $profile === false ? '../profilesekolah/sambutan.php' : 'sambutan.php'; ?>">Sambutan Kepala Sekolah &nbsp;<img src="https://img.icons8.com/pastel-glyph/64/000000/-chair.png" width="20" height="20"/></a></li>
                <li><a class="dropdown-item" href="<?php echo $profile === false ? '../profilesekolah/visimisi.php' : 'visimisi.php'; ?>">Visi dan Misi &nbsp;<img src="https://img.icons8.com/ios-filled/50/000000/table.png" width="20" height="20"/></a></li>
                <li><a class="dropdown-item" href="<?php echo $profile === false ? '../profilesekolah/saranaprasarana.php' : 'saranaprasarana.php'; ?>">Sarana dan Prasarana &nbsp; <img src="https://img.icons8.com/ios-glyphs/30/000000/room.png" width="20" height="20"/></a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  Pendidik & Tenaga Pendidik
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li>
                    <a class="dropdown-item" href="<?php echo $pendidik === false ? '../pendidiktenagapendidik/strukturorganisasisekolah.php' : 'strukturorganisasisekolah.php'; ?>">Struktur Organisasi Sekolah &nbsp;
                    <img src="https://img.icons8.com/ios-filled/50/000000/tree-structure.png" width="20" height="20"/></a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?php echo $pendidik === false ? '../pendidiktenagapendidik/kepalasekolah.php' : 'kepalasekolah.php'; ?>">Kepala Sekolah &nbsp;
                    <img src="https://img.icons8.com/pastel-glyph/100/000000/school-director--v2.png" width="20" height="20"/></a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?php echo $pendidik === false ? '../pendidiktenagapendidik/komitesekolah.php' : 'komitesekolah.php'; ?>">Komite Sekolah &nbsp; 
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/room.png" width="20" height="20"/></a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?php echo $pendidik === false ? '../pendidiktenagapendidik/dataguru.php' : 'dataguru.php'; ?>">Data Guru &nbsp; 
                    <img src="https://img.icons8.com/ios-filled/50/000000/teacher.png" width="20" height="20"/></a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?php echo $pendidik === false ? '../pendidiktenagapendidik/datasiswa.php' : 'datasiswa.php'; ?>">Data Siswa &nbsp; 
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/room.png" width="20" height="20"/></a>
                  </li>
                </ul>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $ekstra === false ? '../ekstrakulikuler/ekstra.php' : 'ekstra.php'; ?>">Extra Kulikuler</a>
            </li>
            <a class="btn tombol-button text-light" href="../login/login.php" role="button">Login</a>
          </ul>
        </div>
      </div>
    </nav>

    <!-- End Navbar -->
