<?php 
  include_once '../inc/conn.php';

  $sql = "SELECT * FROM saranaprasarana";
  $result = mysqli_query($conn, $sql);
  $no = 1;
?>

<?php include '../inc/header.php'; ?>
    <!-- profile sekolah -->
    <div class="container">
      <!-- breadcrumb -->
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item" aria-current="page"><a href="profile.php">Profile</a></li>
              <li class="breadcrumb-item active" aria-current="page">Sarana dan Prasarana</li>
          </ol>
      </nav>
      <div class="row">
          <div class="col-md-9 bg-dark">
            <h1 class="text-judul">Sarana dan Prasarana</h1>
            <p>SMA Negeri 2 MOJOKERTO berusaha semaksimal mungkin untuk memberikan pelayanan kepada warga sekolah khususnya peserta didik dengan dipenuhinya fasilitas dan prasarana yang ada di sekolah. Adapun sarana dan prasarana di SMA NEGERI 2 MOJOKERTO diantaranya adalah :</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sarana</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Kelengkapan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($data = mysqli_fetch_assoc($result)): ?>
                    <tr>
                      <th scope="row"><?php echo $no; ?></th>
                      <td><?php echo $data['sarana']; ?></td>
                      <td><?php echo $data['jumlah']; ?></td>
                      <td><?php echo $data['kelengkapan'];  $no++?></td>
                    </tr>
                    <?php endwhile; mysqli_free_result($result); mysqli_close($conn);?>
                </tbody>
                </table>
          </div>
          <div class="col-md-3">
              <h3 class>LINK TERKAIT</h3>
              <div class="list-group list-group-flush list-link">
                  <a href="profilesekolah.php" class="list-group-item list-group-item-action bg-list">Profile Sekolah <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></a>
                  <a href="visimisi.php" class="list-group-item list-group-item-action bg-list">Visi dan Misi <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></a>
                  <a href="sambutan.php" class="list-group-item list-group-item-action bg-list">Sambutan Kepala Sekolah <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></a>
              </div>
          </div>
      </div>
    </div>

<?php include '../inc/footer.php'; ?>