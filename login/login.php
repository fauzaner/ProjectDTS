<?php
  session_start();
  $msg = "";
  $msgClass = "";
  $msgDisplay = "style='display: none'";
  if(isset($_POST['submit'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    if(!empty($username) && !empty($password)){
      include '../inc/conn.php';
      $sql = "SELECT * FROM user WHERE username = '$username'";
      $result = mysqli_query($conn, $sql);
      if($data = mysqli_fetch_assoc($result)){
        if($data['password'] != md5($password)){
          $msg = 'Password Salah';
          $msgClass = 'danger';
          $msgDisplay = "";
        }else{
          $_SESSION['username'] = $data['username'];
          header('location:index.php');
        }
      }else{
        $msg = 'Username Tidak Ditemukan';
        $msgClass = 'danger';
        $msgDisplay = "";
      }
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
 <title>Login</title>
 <link rel="stylesheet" href="../css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="../css/styleLogin.css">
 <meta name="viewport" content="width=device-width"/>
    <meta content='width=device-width, initial-scale=1' name='viewport'/>
    <script src="../js/validasi.js"></script>
</head>
<body>
 <div id="container">
    <div class="login">
    <h1>LOGIN HERE</h1>
    <p>Masuk Terlebih Dahulu Ya!</p>
    <div class="alert alert-<?php echo $msgClass; ?>" role="alert" <?php echo $msgDisplay; ?>">
    <?php echo $msg; ?>
    </div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validasi()">
      <div>
        <label>Username:</label>
        <input type="text" name="username" id="username" />
      </div>
      <div>
        <label>Password:</label>
        <input type="password" name="password" id="password" />
      </div>
      <div>
        <input type="submit" value="Login" class="tombol" name="submit">
        <a href="../index.php" class="tombol">Back</a>
      </div>
      </form>
    </div>
  </div>
</body>
</html>