<?php
class Calculator {
    private $bilangan1;
    private $bilangan2;

    public function __construct($bil1, $bil2) {
        $this->bilangan1 = $bil1;
        $this->bilangan2 = $bil2;
    }

    public function pertambahan() {
        return $this->bilangan1 + $this->bilangan2;
    }

    public function pengurangan() {
        return $this->bilangan1 - $this->bilangan2;
    }

    public function pembagian() {
        if ($this->bilangan2 != 0) {
            return $this->bilangan1 / $this->bilangan2;
        } else {
            return "Error: Pembagian oleh nol.";
        }
    }

    public function perkalian() {
        return $this->bilangan1 * $this->bilangan2;
    }
}

// Buat object dan tampilkan masing-masing method
$calculator = new Calculator(10, 5);

echo "Pertambahan: " . $calculator->pertambahan() . "\n";
echo "Pengurangan: " . $calculator->pengurangan() . "\n";
echo "Pembagian: " . $calculator->pembagian() . "\n";
echo "Perkalian: " . $calculator->perkalian() . "\n";
?>
