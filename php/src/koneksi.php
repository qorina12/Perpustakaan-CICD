<?php 
    $server = "172.20.0.2"; 
    $user = "root"; 
    $password = "Admin"; 
    $nama_database = "dbpus"; 

    $db = mysqli_connect($server, $user, $password, $nama_database); 
    if( !$db ) {
        die("Gagal terhubung dengan database: " . mysqli_connect_error()); 
    }
?>