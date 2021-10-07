<?php 
    include '../inc/header.php'; 
    include_once '../inc/conn.php';

    $sql = "SELECT * FROM kepala_sekolah ORDER BY kepala_sekolah.nip DESC";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
?>

    <!-- Table -->
  
<!-- container -->
<div class="container">
  <!-- Info Panel -->
    <div class="row justify-content-center">
        <div class="col-10 panel">
            <div class="row">
                <div class="container">
                    <div class="ms-auto h1"><h1><center>Daftar Pejabat Sekolah</center></h1>
                    </div>
                    <br>
                    <div style="overflow-x:auto;">
                        <table class="table custom-table table-striped">
                            <thead>
                                <tr>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Kontak</th>
                                    <th>Alamat</th>
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
    <!-- End Table -->

    <!-- Footer -->
<?php include '../inc/footer.php'; ?>