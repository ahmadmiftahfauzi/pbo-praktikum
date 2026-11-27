<?php

require('./Jasa.php');

use Pbo\marketplace\Jasa;

 //object
 $produk = new Jasa ();

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

echo "metode pembayaran: " . $produk -> payment(""qris"") ;