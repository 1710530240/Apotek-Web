<?php
include "../koneksi/koneksi.php";
function user($data)
{

    global $conn;
    $kode = $data["kodeobat"];
    $nama_obat = $data["namaobat"];
    $jenis_obat = $data["jenisobat"];
    $harga_beli = $data["hargabeli"];
    $harga_jual = $data["hargajual"];
    $expired = $data["expired"];


    $query = "UPDATE obat SET 
    namaobat = '$nama_obat',
    jenisobat = '$jenis_obat',
    hargabeli = '$harga_beli',
    hargajual = '$harga_jual',
    expired = '$expired' WHERE kode = '$kode'
    ";
    if (mysqli_query($conn, $query)) {
        "<script>
        alert ('Berhasil ditambahkan');
        document.location='dataobat.php';
        </script>";
    } else {
        "<script>
        alert ('Gagal ditambahkan');
        document.location='dataobat.php';
        </script>";
    }
}
