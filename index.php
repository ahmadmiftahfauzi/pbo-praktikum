<?php
require('./PropertyConstan.php');

use Pbo\marketplace\produk;

 //object
 $produk = new produk ();

 $produk -> setKode("P001")
         -> setNama("Laptop")
         -> setHarga(10000000)
         -> setStok(5);


//hasil
echo "produk: " . $produk -> getNama();
echo "<br>";

echo "harga: " . $produk -> getHarga() ;
echo "<br>";

echo "stok: " . $produk -> getStok() ;
echo "<br>";

echo "pajak: " . $produk -> pajak() . "%" ;
echo "<br>";

echo "total harga setelah pajak: Rp." . $produk -> total ();