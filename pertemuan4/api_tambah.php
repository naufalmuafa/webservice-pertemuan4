<?php

    include "koneksi.php";
    header('Content-Type: application/json');

    if(isset($_POST['nama_produk']) && isset($_POST['tipe_produk']) && isset($_POST['harga']) && isset($_POST['stok'])) {
        $nama_produk = $_POST['nama_produk'];
        $tipe_produk = $_POST['tipe_produk'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $sql = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, tipe_produk, harga, stok) VALUES ('$nama_produk', '$tipe_produk', ',$harga', '$stok')");

        if($sql) {
            echo json_encode(array('RESPONSE' => 'SUCCESS:'));
        }else{
            echo json_encode(array('RESPONSE' => 'Gagal menginput data ke database:' . mysqli_error($koneksi)));
        }
    }else{
        echo "GAGAL, data kosong.";
    }