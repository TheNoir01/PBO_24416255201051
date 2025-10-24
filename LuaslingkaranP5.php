<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function __construct($jariValue = 1) {
        $this->jari = $jariValue;
        
    }
    public function tampil($nama = 'tabung'):void{
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} ini hasilnya adalah: {$rumus}";
    }
    public static function testing() {
        echo "<br/>";
        echo "Ini testing static";
    }
    
    public function __destruct() {
        echo "<br/> done bang";
    }
}

$Lingkaran = new LuasLingkaran(10);
//$Lingkaran->jari = 10; //input nilai jari-jari
$Lingkaran->tampil("galon"); //tampilkan luas lingkaran

LuasLingkaran::testing(); //memanggil method static

//$rumus = LuasLingkaran::phi * ($Lingkaran->jari * $Lingkaran->jari);

//echo "Hasil nya adalah: " . $rumus;
