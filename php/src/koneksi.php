<?php 
    $server = "150.230.59.50"; 
    $user = "orin"; 
    $password = "Admin"; 
    $nama_database = "dbpus"; 

    $db = mysqli_connect($server, $user, $password, $nama_database); 
    if( !$db ) {
        die("Gagal terhubung dengan database: " . mysqli_connect_error()); 
    }
?>