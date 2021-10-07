<?php
  include 'header1.php';

  $sql = "SELECT id FROM user";
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  $idUsers = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);

  if(isset($_GET['id'])){
    $id = htmlspecialchars($_GET['id']);
    $sql = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if(!$data = mysqli_fetch_assoc($result)){
      die('NO DATA FOUNDED');
    }
  }

  if(isset($_POST['submit'])){
    $id = htmlspecialchars($_POST['id']);
    $username = htmlspecialchars($_POST['username']);
    $password = md5(htmlspecialchars($_POST['password']));
    $level = htmlspecialchars($_POST['level']);

    $sql = "UPDATE user SET username = '$username', password = '$password', level = '$level' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header("location:profile.php?info=updated&username=$username");
    }else{
      die('Error : '. mysqli_error($conn));
    }
  }  
?>

                <!-- Page content-->
                <div class="container-fluid">
                  <h1 class="mt-4"><i class="fas fa-user-plus"></i> EDIT</h1><hr>
                  <h4><i class="fas fa-graduation-cap"></i> Ubah Profile</h4><br>
                  
                  <div class="col-lg-8 mb-5">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" onchange="submit();">
                      <div class="form-group mb-5">
                        <label for="pilih">Pilih Id</label>
                        <select name="id" id="id_user" class="form-control">
                          <option value="">...</option>
                          <?php foreach($idUsers as $idUser): ?>
                          <option value="<?php echo $idUser['id']; ?>"><?php echo $idUser['id']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </form>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validasiProfile()">
                      <div class="form-group mb-2">
                        <label for="id">Id</label>
                        <input type="text" name="id" id="id" class="form-control" disabled value="<?php echo isset($data['id']) ? $data['id'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control"  value="<?php echo isset($data['username']) ? $data['username'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="password">New Password</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="Type New Password...">
                      </div>
                      <div class="form-group mb-2">
                        <label for="level">Level</label>
                        <input type="text" name="level" id="level" class="form-control"  value="<?php echo isset($data['level']) ? $data['level'] : ''; ?>">
                      </div>
                      <input type="hidden" name="id" value="<?php echo isset($data['id']) ? $data['id'] : ''; ?>">
                      <button type="submit" class="btn btn-primary" name="submit">Update</button> <a href="profile.php" class="btn btn-secondary">Back</a>
                    </form>
                  </div>
                </div>
<?php include 'footer.php'; ?>