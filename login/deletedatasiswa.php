<?php
  include_once '../inc/conn.php';
  if(isset($_GET['id'])){
    $id = htmlspecialchars($_GET['id']);
    $nama = htmlspecialchars($_GET['nama']);
    $sql = "DELETE FROM datasiswa WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header("location:datasiswa.php?info=deleted&nama=$nama");
    }else{
      die('Error : '.mysqli_error($conn));
    }
  }else{
    header('location:datasiswa.php');
  }
?>