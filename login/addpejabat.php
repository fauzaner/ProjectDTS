<?php 
  include 'header.php';
  if(isset($_POST['submit'])){
    $nip = htmlspecialchars($_POST['nip']);
    $nama = htmlspecialchars($_POST['nama']);
    $jabatan = htmlspecialchars($_POST['jabatan']);
    $kontak = htmlspecialchars($_POST['kontak']);
    $alamat = htmlspecialchars($_POST['alamat']);

    $sql = "INSERT INTO kepala_sekolah (nip, nama, jabatan, kontak, alamat) VALUES ('$nip', '$nama', '$jabatan', '$kontak', '$alamat')";

    if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header("location:pejabatsekolah.php?info=added&nama=$nama");
    }else{
      die('Error : '. mysqli_error($conn));
    }
  }  
?>

                <!-- Page content-->
                <div class="container-fluid">
                  <h1 class="mt-4"><i class="fas fa-user-plus"></i> TAMBAH</h1><hr>
                  <h4><i class="fas fa-graduation-cap"></i> Isilah Data Pejabat Sekolah</h4><br>
                  <div class="col-lg-8 mb-5">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validasiPejabat()">
                      <div class="form-group mb-2">
                        <label for="nip">NIP</label>
                        <input type="number" name="nip" id="nip" class="form-control" placeholder="212951...">
                      </div>
                      <div class="form-group mb-2">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama...">
                      </div>
                      <div class="form-group mb-2">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukkan Jabatan">
                      </div>
                      <div class="form-group mb-2">
                        <label for="kontak">Kontak</label>
                        <input type="number" name="kontak" id="kontak" class="form-control" placeholder="8268.....">
                      </div>
                      <div class="form-group mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat...">
                      </div>
                      <button type="submit" class="btn btn-primary" name="submit">Simpan</button> <button type="reset" class="btn btn-secondary">Reset</button>
                    </form>
                  </div>
                </div>
<?php include 'footer.php'; ?>