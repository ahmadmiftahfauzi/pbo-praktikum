<?php

namespace App\Models {

    class Produk
    {
        // Properti
        public string $kode;
        public string $nama;
        public int $harga;
        public int $stok;

        // Constant
        public const PAJAK = 0.11;

        // Constructor
        public function __construct(string $kode, string $nama, int $harga, int $stok)
        {
            $this->kode  = $kode;
            $this->nama  = $nama;
            $this->harga = $harga;
            $this->stok  = $stok;
        }

        // Method static
        public static function persenPajak(): float
        {
            return self::PAJAK * 100;
        }

        public static function hitungPajak(int $harga): float
        {
            return $harga * self::PAJAK;
        }

        public static function hitungTotal(int $harga): float
        {
            return $harga + self::hitungPajak($harga);
        }
    }
}

//Namespace 2: tempat program utama
namespace App\Main {

    use App\Models\Produk;

    // Object
    $produk = new Produk('P0001', 'Laptop', 1000000, 5);

    // Hitung
    $pajak       = Produk::persenPajak();
    $jumlahPajak = Produk::hitungPajak($produk->harga);
    $total       = Produk::hitungTotal($produk->harga);

    // Output
    echo "Produk: " . $produk->nama . "<br/>";
    echo "Harga: " . $produk->harga . "<br/>";
    echo "Stok: " . $produk->stok . "<br/>";
    echo "Pajak: " . $pajak . "%<br/><br/>";
    echo "Total harga setelah Pajak: Rp." . $total;
}