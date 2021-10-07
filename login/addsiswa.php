<?php 
  include 'header.php';
  if(isset($_POST['submit'])){
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $jurusan = htmlspecialchars($_POST['jurusan']);

    $sql = "INSERT INTO datasiswa (nama, alamat, kelas, jurusan) VALUES ('$nama', '$alamat', '$kelas', '$jurusan')";
    
    if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header("location:datasiswa.php?info=added&nama=$nama");
    }else{
      die('Error : '. mysqli_error($conn));
    }
  }  
?>

                <!-- Page content-->
                <div class="container-fluid">
                  <h1 class="mt-4"><i class="fas fa-user-plus"></i> TAMBAH</h1><hr>
                  <h4><i class="fas fa-graduation-cap"></i> Isilah Data Murid Sekolah</h4><br>
                  <div class="col-lg-8 mb-5">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validasiMurid()">
                      <div class="form-group mb-2">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama...">
                      </div>
                      <div class="form-group mb-2">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat...">
                      </div>
                      <div class="form-group mb-2">
                        <label for="kelas">Kelas</label>
                        <select name="kelas" id="kelas" class="form-control">
                          <option value="">...</option>
                          <option value="10A">10A</option>
                          <option value="10B">10B</option>
                          <option value="10C">10C</option>
                          <option value="11A">11A</option>
                          <option value="11B">11B</option>
                          <option value="11C">11C</option>
                          <option value="12A">12A</option>
                          <option value="12B">12B</option>
                          <option value="12C">12C</option>
                        </select>
                      </div>
                      <div class="form-group mb-3">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                          <option value="">...</option>
                          <option value="MIPA">MIPA</option>
                          <option value="IPS">IPS</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary" name="submit">Simpan</button> <button type="reset" class="btn btn-secondary">Reset</button>
                    </form>
                  </div>
                </div>
<?php include 'footer.php'; ?>