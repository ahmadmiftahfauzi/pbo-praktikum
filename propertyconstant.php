<?php

namespace Pbo\Marketplace;

class produk {
    
    
    private string $kode;
    private string $nama;
    private int $harga;
    private int $stok;

    
    public const PAJAK = 0.11;

    public function __construct(){
    }
    
    
    public function setKode($kode){
        $this->kode = $kode;
        return $this;
    }

    public function setNama($nama){
        $this->nama = $nama;
        return $this;
    }

    public function setHarga($harga){
        if ($harga <= 0){
            echo "Harga tidak boleh 0";
            exit();
        }
        $this->harga = $harga;
        return $this;
    }

    public function setStok($stok){
        if ($stok <= 0){
            echo "Stok tidak tersedia";
            exit();
        }
        $this->stok = $stok;
        return $this;
    }

    
    public function getKode(){
        return $this->kode;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getHarga(){
        return "Rp.". $this->harga;
    }

    public function getStok(){
        return $this->stok ."pcs";
    }

    public function pajak(){
        return self::PAJAK * 100;
    }

    public function total(){
        return $this->harga + ($this->harga * self::PAJAK);
    }

}