<?php

class Mobil {
    // Properti
    private $merk;
    private $tahun;
    private $warna;

    // Konstruktor
    public function __construct($merk, $tahun, $warna) {
        $this->merk = $merk;
        $this->tahun = $tahun;
        $this->warna = $warna;
    }

    // Metode untuk mengambil merk mobil
    public function getMerk() {
        return $this->merk;
    }

    // Metode untuk mengambil tahun mobil
    public function getTahun() {
        return $this->tahun;
    }

    // Metode untuk mengambil warna mobil
    public function getWarna() {
        return $this->warna;
    }

    // Metode untuk mengganti warna mobil
    public function catUlang($warnaBaru) {
        $this->warna = $warnaBaru;
        return "Mobil telah dicat ulang menjadi warna $warnaBaru.";
    }

    // Metode untuk menyalakan mesin mobil
    public function start() {
        return "Mesin mobil $this->merk telah dinyalakan.";
    }

    // Metode untuk mematikan mesin mobil
    public function stop() {
        return "Mesin mobil $this->merk telah dimatikan.";
    }
}

?>
