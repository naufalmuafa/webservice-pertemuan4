<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('DB', 'dbrest');
    define('PASS', '');
    $koneksi = new mysqli(HOST, USER, PASS, DB) or die('KONEKSI GAGAL KE DATABASE');
    
    
    