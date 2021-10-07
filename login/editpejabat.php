<?php
  include 'header.php';
  if(isset($_GET['nip'])){
    $nip = htmlspecialchars($_GET['nip']);
    $sql = "SELECT * FROM kepala_sekolah WHERE nip = '$nip'";
    $result = mysqli_query($conn, $sql);
    if(!$data = mysqli_fetch_assoc($result)){
      die('NO DATA FOUNDED');
    }
  }

  if(isset($_POST['submit'])){
    $nip = htmlspecialchars($_POST['nip']);
    $nama = htmlspecialchars($_POST['nama']);
    $jabatan = htmlspecialchars($_POST['jabatan']);
    $kontak = htmlspecialchars($_POST['kontak']);
    $alamat = htmlspecialchars($_POST['alamat']);

    $sql = "UPDATE kepala_sekolah SET nama = '$nama', jabatan = '$jabatan', kontak = '$kontak', alamat = '$alamat' WHERE nip = '$nip'";

    if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header("location:pejabatsekolah.php?info=updated&nama=$nama");
    }else{
      die('Error : '. mysqli_error($conn));
    }
  }  
?>

                <!-- Page content-->
                <div class="container-fluid">
                  <h1 class="mt-4"><i class="fas fa-user-plus"></i> EDIT</h1><hr>
                  <h4><i class="fas fa-graduation-cap"></i> Isilah Data Pejabat Sekolah</h4><br>
                  <div class="col-lg-8 mb-5">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validasiPejabat()">
                      <div class="form-group mb-2">
                        <label for="nip">NIP</label>
                        <input type="number" name="nip" id="nip" class="form-control" disabled value="<?php echo isset($data['nip']) ? $data['nip'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control"  value="<?php echo isset($data['nama']) ? $data['nama'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control" value="<?php echo isset($data['jabatan']) ? $data['jabatan'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="kontak">Kontak</label>
                        <input type="number" name="kontak" id="kontak" class="form-control" value="<?php echo isset($data['kontak']) ? $data['kontak'] : ''; ?>">
                      </div>
                      <div class="form-group mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo isset($data['alamat']) ? $data['alamat'] : ''; ?>">
                      </div>
                      <input type="hidden" name="nip" value="<?php echo isset($data['nip']) ? $data['nip'] : ''; ?>">
                      <?php mysqli_free_result($result); mysqli_close($conn); ?>
                      <button type="submit" class="btn btn-primary" name="submit">Update</button> <a href="pejabatsekolah.php" class="btn btn-secondary">Back</a>
                    </form>
                  </div>
                </div>
<?php include 'footer.php'; ?>