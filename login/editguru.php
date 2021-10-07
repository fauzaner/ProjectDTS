<?php 
  include 'header.php';
  if(isset($_GET['nip'])){
    $nip = htmlspecialchars($_GET['nip']);
    $sql = "SELECT * FROM guru WHERE id = '$nip'";
    $result = mysqli_query($conn, $sql);
    if(!$data = mysqli_fetch_assoc($result)){
      die('NO DATA FOUNDED');
    }
  }

  if(isset($_POST['submit'])){
    $nip = htmlspecialchars($_POST['nip']);
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $status = htmlspecialchars($_POST['status']);
    $jabatan = htmlspecialchars($_POST['jabatan']);

    $sql = "UPDATE guru SET id = '$nip', nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', status = '$status', jabatan = '$jabatan' WHERE id = '$nip'";

    if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header("location:dataguru.php?info=updated&nama=$nama");
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
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validasiGuru()">
                      <div class="form-group mb-2">
                        <label for="nip">NIP</label>
                        <input type="number" name="nip" id="nip" class="form-control" disabled value="<?php echo isset($data['id']) ? $data['id'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control"  value="<?php echo isset($data['nama']) ? $data['nama'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo isset($data['alamat']) ? $data['alamat'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                          <option value="">...</option>
                          <option value="L" <?php echo $data['jenis_kelamin'] == 'L' ? 'selected' : '' ?>>Laki-Laki</option>
                          <option value="P" <?php echo $data['jenis_kelamin'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
                        </select>
                      </div>
                      <div class="form-group mb-2">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                          <option value="">...</option>
                          <option value="PNS" <?php echo $data['status'] == 'PNS' ? 'selected' : '' ?>>PNS</option>
                          <option value="KONTRAK" <?php echo $data['status'] == 'KONTRAK' ? 'selected' : '' ?>>Kontrak</option>
                        </select>
                      </div>
                      <div class="form-group mb-3">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control" value="<?php echo isset($data['jabatan']) ? $data['jabatan'] : ''; ?>">
                      </div>
                      <input type="hidden" name="nip" value="<?php echo isset($data['id']) ? $data['id'] : ''; ?>">
                      <?php mysqli_free_result($result); mysqli_close($conn); ?>
                      <button type="submit" class="btn btn-primary" name="submit">Update</button> <a href="dataguru.php" class="btn btn-secondary">Back</a>
                    </form>
                  </div>
                </div>
<?php include 'footer.php'; ?>