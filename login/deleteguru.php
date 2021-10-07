<?php
  include_once '../inc/conn.php';
  if(isset($_GET['nip'])){
    $nip = htmlspecialchars($_GET['nip']);
    $nama = htmlspecialchars($_GET['nama']);
    $sql = "DELETE FROM guru WHERE id = '$nip'";
    if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header("location:dataguru.php?info=deleted&nama=$nama");
    }else{
      die('Error : '.mysqli_error($conn));
    }
  }else{
    header('location:dataguru.php');
  }
?>