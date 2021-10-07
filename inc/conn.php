<?php
    define('HOST', 'localhost');
    define('USERNAME', 'id17518389_root');
    define('PASSWORD', 'Sekolah-2021');
    define('DB_NAME', 'id17518389_website_dika');

    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME);

    if(mysqli_connect_errno()){
        die('Error : '.mysqli_connect_error());
    }
?>