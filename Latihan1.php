<?php

class Buku {
    protected $judul;
    protected $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }
}

class Novel extends Buku {
    private $genre;

    public function __construct($judul, $penulis, $genre) {
        parent::__construct($judul, $penulis);
        $this->genre = $genre;
    }

    public function getGenre() {
        return $this->genre;
    }
}

class Anggota {
    private $nama;
    private $nim;

    public function __construct($nama, $nim) {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNim() {
        return $this->nim;
    }
}

class Peminjaman {
    private $buku;
    private $anggota;

    public function __construct($buku, $anggota) {
        $this->buku = $buku;
        $this->anggota = $anggota;
    }

    public function tampilkanData() {
        echo "<h2>Data Peminjaman Buku</h2>";
        echo "Nama Anggota: " . $this->anggota->getNama() . "<br>";
        echo "NIM: " . $this->anggota->getNim() . "<br>";
        echo "Judul Buku: " . $this->buku->getJudul() . "<br>";
        echo "Penulis: " . $this->buku->getPenulis() . "<br>";
        echo "Genre: " . $this->buku->getGenre() . "<br>";
    }
}

$novelFiksi = new Novel(
    "Bumi Manusia",
    "Pramoedya Ananta Toer",
    "Fiksi"
);

$anggotaWahyu = new Anggota(
    "I Gusti Ngurah Agung Wahyu",
    "250030612"
);

$transaksi = new Peminjaman($novelFiksi, $anggotaWahyu);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP - Wahyu</title>
</head>
<body>
    <?php
    $transaksi->tampilkanData();
    ?>
</body>
</html>