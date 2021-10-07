<?php 
  include 'header.php'; 
  $sql = "SELECT * FROM kepala_sekolah ORDER BY nip DESC";
  $result = mysqli_query($conn, $sql);
  $msg = "";
  $msgClass = "";
  $msgDisplay = "style='display: none'";
  
  if(isset($_GET['info'])){
    if($_GET['info'] == 'added'){
      $msg = "<strong>".$_GET['nama']."</strong> telah ditambahkan";
      $msgClass = "alert-success";
      $msgDisplay = "";
    }elseif($_GET['info'] == 'updated'){
      $msg = "<strong>".$_GET['nama']."</strong> telah diupdate";
      $msgClass = "alert-primary";
      $msgDisplay = "";
    }elseif($_GET['info'] == 'deleted'){
      $msg = "<strong>".$_GET['nama']."</strong> telah dihapus";
      $msgClass = "alert-danger";
      $msgDisplay = "";
    }
  }
?>
                <!-- Page content-->
                <div class="container-fluid mb-3">
                  <h1 class="mt-4">Overview</h1><hr>
                  <h4><i class="fas fa-graduation-cap"></i> Data Pejabat Sekolah</h4>
                  <div class="alert <?php echo $msgClass; ?> alert-dismissible fade show mt-3" role="alert" <?php echo $msgDisplay; ?>>
                    <?php echo $msg; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th>NIP</th>
                              <th>Nama</th>
                              <th>Jabatan</th>
                              <th>Kontak</th>
                              <th>Alamat</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php while($data = mysqli_fetch_assoc($result)): ?>
                          <tr>
                              <td><?php echo $data['nip']; ?></td>
                              <td><?php echo $data['nama']; ?></td>
                              <td><?php echo $data['jabatan']; ?></td>
                              <td><?php echo $data['kontak']; ?></td>
                              <td><?php echo $data['alamat']; ?></td>
                              <td><a href="editpejabat.php?nip=<?php echo $data['nip']; ?>" class=" btn btn-primary">Edit</a> <a href="deletepejabat.php?nip=<?php echo $data['nip']; ?>&nama=<?php echo $data['nama']; ?>" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <?php endwhile; mysqli_free_result($result); ?>
                      </tbody>
                  </table>
                  <a href="addpejabat.php" class="btn btn-success">Tambah</a>
                </div>
<?php mysqli_close($conn); include 'footer.php'; ?>