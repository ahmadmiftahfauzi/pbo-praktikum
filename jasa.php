<?php

namespace Pbo\marketplace;

require_once ('./PropertyConstan.php');

use Pbo\marketplace\produk;

class Jasa {
    use produk;
    
   public funtion payment($tipe) {
          "virtual" => "Virtual Account",
          "QRIS" => "QRIS",
          defaurlt => "Hanya menerima pembayaran melalui Virtual Account dan QRIS"
   };
}