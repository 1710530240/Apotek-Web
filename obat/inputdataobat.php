<?php
include "koneksi.php";
include "proses_input.php";
if (isset($_POST["simpan"])) {
    if (user($_POST) == true) {
        echo  "<script>
        alert ('Berhasil ditambahkan');
        </script>";
    } else {
        echo "<script>
        alert ('Gagal ditambahkan');
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>input data obat</title>
    <link rel="stylesheet" href="../html/css/bootstrap.css">
    <link rel="stylesheet" href="../html/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Apotek-BG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="DataObat.html">Data Obat</a>
                    <a class="nav-item nav-link active" href="inputdataobat.html">Form input Obat</a>
                    <a class="nav-item nav-link" href="card.html">Data Apoteker</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h4 class="text-center pt-2">Input Data Obat</h4>
        <div class="col-6 m-auto">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="">kode Obat</label>
                    <input name="kodeobat" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Obat</label>
                    <input name="namaobat" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">jenis obat</label>
                    <select name="jenisobat" class="form-control">
                        <option value="tablet">Tablet</option>
                        <option value="kapsul">Kapsul</option>
                        <option value="sirup">Sirup</option>
                        <option value="bubuk">Bubuk</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">harga beli</label>
                    <input name="hargabeli" type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">harga jual</label>
                    <input name="hargajual" type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Expired</label>
                    <input name="expired" type="date" class="form-control">
                </div>
                <div class="form-group">
                    <button name="simpan" type="submit" class="btn btn-success">simpan</button>
                    <button name="batal" type="reset" class="btn btn-danger">Batal</button>
                </div>

            </form>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>