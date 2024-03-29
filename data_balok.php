<?php
// Panggil class Balok
require_once 'class_balok.php'; // Gantilah path sesuai dengan lokasi file class Balok

// Buat 4 objek Balok
$balok1 = new Balok(29, 16, 7);
$balok2 = new Balok(10, 5, 3);
$balok3 = new Balok(15, 8, 6);
$balok4 = new Balok(20, 12, 9);

// Menampilkan informasi untuk setiap objek
echo "Objek 1\n";
echo "Luas Permukaan: " . $balok1->getLuas() . "\n";
echo "Keliling: " . $balok1->getKeliling() . "\n";
echo "Volume: " . $balok1->getVolume() . "\n\n";

echo "Objek 2\n";
echo "Luas Permukaan: " . $balok2->getLuas() . "\n";
echo "Keliling: " . $balok2->getKeliling() . "\n";
echo "Volume: " . $balok2->getVolume() . "\n\n";

echo "Objek 3\n";
echo "Luas Permukaan: " . $balok3->getLuas() . "\n";
echo "Keliling: " . $balok3->getKeliling() . "\n";
echo "Volume: " . $balok3->getVolume() . "\n\n";

echo "Objek 4\n";
echo "Luas Permukaan: " . $balok4->getLuas() . "\n";
echo "Keliling: " . $balok4->getKeliling() . "\n";
echo "Volume: " . $balok4->getVolume() . "\n";
?>
