<?php

    require_once('koneksi.php');
    header('Content-Type: application/json');

    $myArray = array();
    if($result = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id ASC")) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
        }
        mysqli_close($koneksi);
        echo json_encode($myArray);
    }