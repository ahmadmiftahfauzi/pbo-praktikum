<?php

class produk {
    
    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;
    
    // 1. Tambahkan nama function (misalnya: getPersentasePajak)
    public function getPersentasePajak()
    {
        // 2. Tambahkan operator * (kali)
        return self::PAJAK * 100;
    }

    public function total() {
        // 3. Perbaiki typo 'return', tambah operator *, dan ubah pajak jadi huruf besar
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

//object
$produk = new produk();

//INPUTAN KE PROPERTY
$produk->kode = 'P001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//HITUNG PAJAK
// 4. Tambahkan operator * (kali) pada perhitungan
$pajak = produk::PAJAK * 100;

// 5. Tambahkan operator * (kali) pada perhitungan
$jumlahpajak = $produk->harga * produk::PAJAK;

//total
$total = $produk->harga + $jumlahpajak;
// Catatan: Karena kamu sudah buat fungsi total() di dalam class, 
// kamu juga bisa langsung pakai: $total = $produk->total();

//hasil
echo "produk: " . $produk->nama . "<br>";
echo "kode: " . $produk->kode . "<br>";
echo "harga: " . $produk->harga . "<br>";
echo "stok: " . $produk->stok . "<br>";
echo "pajak: " . $pajak . "%" . "<br>";

echo "total harga setelah pajak: Rp." . $total;
?>