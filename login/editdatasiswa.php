<?php 
  include 'header.php';
  if(isset($_GET['id'])){
    $id = htmlspecialchars($_GET['id']);
    $sql = "SELECT * FROM datasiswa WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if(!$data = mysqli_fetch_assoc($result)){
      die('NO DATA FOUNDED');
    }
  }

  if(isset($_POST['submit'])){
    $id = htmlspecialchars($_POST['id']);
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $jurusan = htmlspecialchars($_POST['jurusan']);

    $sql = "UPDATE datasiswa SET nama = '$nama', alamat = '$alamat', kelas = '$kelas', jurusan = '$jurusan' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header("location:datasiswa.php?info=updated&nama=$nama");
    }else{
      die('Error : '. mysqli_error($conn));
    }
  }  
?>

                <!-- Page content-->
                <div class="container-fluid">
                  <h1 class="mt-4"><i class="fas fa-user-plus"></i> EDIT</h1><hr>
                  <h4><i class="fas fa-graduation-cap"></i> Isilah Data Guru Sekolah</h4><br>
                  <div class="col-lg-8 mb-5">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validasiMurid()">
                      <div class="form-group mb-2">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control"  value="<?php echo isset($data['nama']) ? $data['nama'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo isset($data['alamat']) ? trim($data['alamat']) : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="kelas">Kelas</label>
                        <select name="kelas" id="kelas" class="form-control">
                          <option value="">...</option>
                          <option value="10A" <?php echo trim($data['kelas']) == '10A' ? 'selected' : '' ?>>10A</option>
                          <option value="10B" <?php echo trim($data['kelas']) == '10B' ? 'selected' : '' ?>>10B</option>
                          <option value="10C" <?php echo trim($data['kelas']) == '10C' ? 'selected' : '' ?>>10C</option>
                          <option value="11A" <?php echo trim($data['kelas']) == '11A' ? 'selected' : '' ?>>11A</option>
                          <option value="11B" <?php echo trim($data['kelas']) == '11B' ? 'selected' : '' ?>>11B</option>
                          <option value="11C" <?php echo trim($data['kelas']) == '11C' ? 'selected' : '' ?>>11C</option>
                          <option value="12A" <?php echo trim($data['kelas']) == '12A' ? 'selected' : '' ?>>12A</option>
                          <option value="12B" <?php echo trim($data['kelas']) == '12B' ? 'selected' : '' ?>>12B</option>
                          <option value="12C" <?php echo trim($data['kelas']) == '12C' ? 'selected' : '' ?>>12C</option>
                        </select>
                      </div>
                      <div class="form-group mb-2">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                          <option value="">...</option>
                          <option value="MIPA" <?php echo trim($data['jurusan']) == 'MIPA' ? 'selected' : '' ?>>MIPA</option>
                          <option value="IPS" <?php echo trim($data['jurusan']) == 'IPS' ? 'selected' : '' ?>>IPS</option>
                        </select>
                      </div>
                      <input type="hidden" name="id" value="<?php echo isset($data['id']) ? $data['id'] : ''; ?>">
                      <?php mysqli_free_result($result); mysqli_close($conn); ?>
                      <button type="submit" class="btn btn-primary" name="submit">Update</button> <a href="datasiswa.php" class="btn btn-secondary">Back</a>
                    </form>
                  </div>
                </div>
<?php include 'footer.php'; ?>