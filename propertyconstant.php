<?php

class Produk {

    //Produk
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //Constant
    public const PAJAK = 0.11;

    //construct

    public function __construct($kode,$nama,$harga,$stok){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;

    }

    //Method static
    public static function persenPajak(): float {
        return self::PAJAK * 100;
    }

    public static function hitungPajak(int $harga): float {
        return $harga * self::PAJAK;
    }

    public static function hitungTotal(int $harga): float {
        return $harga + self::hitungPajak($harga);
    }
}

//object
$produk = new Produk('P0001','Laptop','1000000',5);


//Hitung
$pajak       = Produk::persenPajak();
$jumlahPajak = Produk::hitungPajak($produk->harga);
$total       = Produk::hitungTotal($produk->harga);

//Output
echo "Produk: ".$produk->nama;
echo "<br/>";

echo "harga: ".$produk->harga;
echo "<br/>";

//Output
echo "Produk: ".$produk->nama;
echo "<br/>";

echo "harga: ".$produk->harga;
echo "<br/>";

echo "stok: ".$produk->stok;
echo "<br/>";

echo "Pajak: " . $pajak . "%<br/>";
echo "<br/>";

echo "Total harga setelah Pajak: Rp.".$total;