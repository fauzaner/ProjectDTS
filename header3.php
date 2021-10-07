<?php
    include '../inc/conn.php';
    session_start();
    if(isset($_SESSION['nama_lengkap'])){
        $user = $_SESSION['nama_lengkap'];
    }else{
        header('location:contact.php');
    }
    $state = basename($_SERVER['PHP_SELF'], '.php');
    $state1 = "";
    $state2 = "";
    $state3 = "";
    $state4 = "";
    if($state == 'index'){
        $state1 = 'active';
    }else if($state == 'setting' || $state == 'editseting'){
        $state2 = 'active';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Informasi Sekolah | Admin</title>
        <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
        <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../css/styleadmin.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
        <script src="../js/datatables.js"></script>
        <script src="../js/validasi.js"></script>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-dark text-white"><i class="fas fa-tools"></i> Welcome, <?php echo " $user"; ?></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo $state1; ?>" href="index.php"><i class="fas fa-cog"></i> &nbsp;Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo $state2; ?>" href="profile.php"><i class="fas fa-graduation-cap"></i> Contact</a>
                    
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-secondary" id="sidebarToggle"><i class="fas fa-bars"></i></button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-shield"></i>
                                <?php echo " $user"; ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="profile.php"><i class="fas fa-user-circle"></i> Profile</a></li>
                                <li><a class="dropdown-item" href="editprofile.php"><i class="fas fa-cog"></i> Setting</a></li>
                                <li><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>