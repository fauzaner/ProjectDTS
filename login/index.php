<?php 
    include 'header.php'; 
    $no = 1;
    $sql = "SELECT * FROM kepala_sekolah ORDER BY nip DESC";
    $result = mysqli_query($conn, $sql);
?>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Overview</h1><hr>
                    <h4><i class="fas fa-graduation-cap"></i> Data Pejabat Sekolah</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
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
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['nip']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['jabatan']; ?></td>
                                <td><?php echo $data['kontak']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                            </tr>
                            <?php $no++; endwhile; mysqli_free_result($result); $no = 1; ?>
                        </tbody>
                    </table>
                    <br>
                    <h4><i class="fas fa-chalkboard-teacher"></i> Data Guru</h4>
                    <table id="example" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Status</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = "SELECT * FROM guru";
                                $result = mysqli_query($conn, $sql);
                                while ($data = mysqli_fetch_assoc($result)): 
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td><?php echo $data['jenis_kelamin']; ?></td>
                                <td><?php echo $data['status']; ?></td>
                                <td><?php echo $data['jabatan']; ?></td>
                            </tr>
                            <?php $no++; endwhile; mysqli_free_result($result); $no = 1; ?>
                        </tbody>
                    </table>
                    <br>
                    <h4><i class="fas fa-user-graduate"></i> Data Siswa</h4>
                    <table id="example1" class="display">
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
                            <?php 
                                $sql = "SELECT * FROM datasiswa";
                                $result = mysqli_query($conn, $sql);
                                while ($data = mysqli_fetch_assoc($result)): 
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td><?php echo $data['kelas']; ?></td>
                                <td><?php echo $data['jurusan']; ?></td>
                            </tr>
                            <?php $no++; endwhile; mysqli_free_result($result); mysqli_close($conn); ?>
                        </tbody>
                    </table>
                    <br><br>
                </div>
<?php include 'footer.php'; ?>