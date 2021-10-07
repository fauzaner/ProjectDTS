<?php
  include_once '../inc/conn.php';
  if(isset($_GET['nip'])){
    $nip = htmlspecialchars($_GET['nip']);
    $nama = htmlspecialchars($_GET['nama']);
    $sql = "DELETE FROM kepala_sekolah WHERE nip = '$nip'";
    if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header("location:pejabatsekolah.php?info=deleted&nama=$nama");
    }else{
      die('Error : '.mysqli_error($conn));
    }
  }else{
    header('location:pejabatsekolah.php');
  }
?>