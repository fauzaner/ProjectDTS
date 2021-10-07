<?php 
    include 'header1.php'; 
    $no = 1;
    $sql = "SELECT * FROM user ORDER BY id ASC";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);\
    mysqli_free_result($result);
?>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Overview</h1><hr>
                    <h4><i class="fas fa-graduation-cap"></i> Profile</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($datas as $data): ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo $data['username']; ?></td>
                                <td><?php echo $data['level']; ?></td>
                                <td><a href="editprofile.php?id=<?php echo $data['id']; ?>" class="btn btn-secondary">Edit</a> <!-- <a href="deleteprofile.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td> -->
                            </tr>
                            <?php $no++; endforeach; $no = 1; ?>
                        </tbody>
                    </table>
                    <!-- <a href="addprofile.php" class="btn btn-primary">Tambah</a> -->
                </div>
<?php include 'footer.php'; ?>