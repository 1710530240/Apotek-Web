<?php
include "../koneksi/koneksi.php";
include "../obat/proses_input.php";
$kode = $_GET["kode"];
$query = "DELETE FROM obat WHERE kode='$kode'";
if (mysqli_query($conn, $query)) {
    echo  "<script>
        alert ('Berhasil dihapus');
        document.location='dataobat.php';
        </script>";
} else {
    echo "<script>
        alert ('Gagal dihapus');
        document.location='dataobat.php';
        </script>";
}
