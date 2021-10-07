<?php 
  include 'header.php';
  if(isset($_POST['submit'])){
    $nip = htmlspecialchars($_POST['nip']);
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $status = htmlspecialchars($_POST['status']);
    $jabatan = htmlspecialchars($_POST['jabatan']);

    $sql = "INSERT INTO guru (id, nama, alamat, jenis_kelamin, status, jabatan) VALUES ('$nip', '$nama', '$alamat', '$jenis_kelamin', '$status', '$jabatan')";

    if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header("location:dataguru.php?info=added&nama=$nama");
    }else{
      die('Error : '. mysqli_error($conn));
    }
  }  
?>

                <!-- Page content-->
                <div class="container-fluid">
                  <h1 class="mt-4"><i class="fas fa-user-plus"></i> TAMBAH</h1><hr>
                  <h4><i class="fas fa-graduation-cap"></i> Isilah Data Guru Sekolah</h4><br>
                  <div class="col-lg-8 mb-5">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validasiGuru()">
                      <div class="form-group mb-2">
                        <label for="nip">NIP</label>
                        <input type="number" name="nip" id="nip" class="form-control" placeholder="Masukkan NIP...">
                      </div>
                      <div class="form-group mb-2">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama...">
                      </div>
                      <div class="form-group mb-2">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat...">
                      </div>
                      <div class="form-group mb-2">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                          <option value="">...</option>
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                      </div>
                      <div class="form-group mb-2">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                          <option value="">...</option>
                          <option value="PNS">PNS</option>
                          <option value="KONTRAK">Kontrak</option>
                        </select>
                      </div>
                      <div class="form-group mb-3">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukkan Jabatan...">
                      </div>
                      <button type="submit" class="btn btn-primary" name="submit">Simpan</button> <button type="reset" class="btn btn-secondary">Reset</button>
                    </form>
                  </div>
                </div>
<?php include 'footer.php'; ?>