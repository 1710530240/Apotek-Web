<?php
include "koneksi.php";
function user($data)
{
    global $conn;
    $kode = $data["kodeobat"];
    $nama_obat = $data["namaobat"];
    $jenis_obat = $data["jenisobat"];
    $harga_beli = $data["hargabeli"];
    $harga_jual = $data["hargajual"];
    $expired = $data["expired"];
    $simpan = $data["simpan"];

    $query = "INSERT INTO obat VALUES 
('$kode','$nama_obat','$jenis_obat',$harga_beli,$harga_jual,'$expired')";
    return mysqli_query($conn, $query);
}
