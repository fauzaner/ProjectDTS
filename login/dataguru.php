<?php 
  include 'header.php';
  $no = 1; 
  $msg = "";
  $msgClass = "";
  $msgDisplay = "style='display: none'";

  $sql = "SELECT * FROM guru";
  $result = mysqli_query($conn, $sql);
  
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
                <div class="container-fluid mb-4">
                  <h1 class="mt-4">Overview</h1><hr>
                  <h4><i class="fas fa-graduation-cap"></i> Data Guru Sekolah</h4>
                  <div class="alert <?php echo $msgClass; ?> alert-dismissible fade show mt-3" role="alert" <?php echo $msgDisplay; ?>>
                    <?php echo $msg; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  <table id="example" class="display">
                      <thead>
                          <tr>
                              <th>NIP</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>Jenis Kelamin</th>
                              <th>Status</th>
                              <th>Jabatan</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php while($data = mysqli_fetch_assoc($result)): ?>
                          <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['jenis_kelamin']; ?></td>
                            <td><?php echo $data['status']; ?></td>
                            <td><?php echo $data['jabatan']; ?></td>
                            <td><a href="editguru.php?nip=<?php echo $data['id']; ?>" class=" btn btn-primary">Edit</a> <a href="deleteguru.php?nip=<?php echo $data['id']; ?>&nama=<?php echo $data['nama']; ?>" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <?php $no++; endwhile; mysqli_free_result($result); ?>
                      </tbody>
                  </table>
                  <a href="addguru.php" class="btn btn-success">Tambah</a>
                </div>
<?php mysqli_close($conn); include 'footer.php'; ?>