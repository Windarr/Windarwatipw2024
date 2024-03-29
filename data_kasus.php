<?php

// Mengimpor kelas Mobil dari file class_kasus.php
require_once 'class_kasus.php';

// Membuat objek-objek mobil
$mobil1 = new Mobil("Toyota", 2019, "Hitam");
$mobil2 = new Mobil("Honda", 2020, "Putih");
$mobil3 = new Mobil("Suzuki", 2018, "Merah");

// Menampilkan informasi mobil
echo "Informasi Mobil 1:<br>";
echo "Merk: " . $mobil1->getMerk() . "<br>";
echo "Tahun: " . $mobil1->getTahun() . "<br>";
echo "Warna: " . $mobil1->getWarna() . "<br>";
echo "<br>";

echo "Informasi Mobil 2:<br>";
echo "Merk: " . $mobil2->getMerk() . "<br>";
echo "Tahun: " . $mobil2->getTahun() . "<br>";
echo "Warna: " . $mobil2->getWarna() . "<br>";
echo "<br>";

echo "Informasi Mobil 3:<br>";
echo "Merk: " . $mobil3->getMerk() . "<br>";
echo "Tahun: " . $mobil3->getTahun() . "<br>";
echo "Warna: " . $mobil3->getWarna() . "<br>";
echo "<br>";

// Memanggil metode untuk mengubah warna mobil
echo $mobil1->catUlang("Biru") . "<br>";
echo "Warna Mobil 1 setelah dicat ulang: " . $mobil1->getWarna() . "<br>";

// Memanggil metode untuk menyalakan mesin mobil
echo $mobil2->start() . "<br>";

// Memanggil metode untuk mematikan mesin mobil
echo $mobil3->stop() . "<br>";

?>
