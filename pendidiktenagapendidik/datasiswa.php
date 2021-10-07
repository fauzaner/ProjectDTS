<?php 
    include '../inc/header.php'; 
    include_once '../inc/conn.php';

    $sql = "SELECT * FROM datasiswa";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $no = 1;
?>

<!-- Table -->
<!-- container -->
  <div class="container">
  <!-- Info Panel -->
    <div class="row justify-content-center">
      <div class="col-10 panel">
        <div class="row">
          <div class="col-lg">
            <div class="content">
              <div class="container">
                <div class="ms-auto h1">
                  <h1><center>Daftar Siswa Sekolah</center></h1>
                </div>
                <br>
                <div>
                  <table class="table custom-table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php while($data = mysqli_fetch_assoc($result)): ?>
                      <tr>
                        <td><?php echo $no; $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['kelas']; ?></td>
                        <td><?php echo $data['jurusan']; ?></td>
                      </tr>
                    <?php endwhile; mysqli_free_result($result); mysqli_close($conn); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- End Table -->

    <!-- Footer -->
<?php include '../inc/footer.php'; ?>