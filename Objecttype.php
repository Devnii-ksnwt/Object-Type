<?php
Class produk{
   Public $namaBarang;
              $merk;
              $harga;
   Public function getcetak(){
        return "$this->merk, (Rp $this->harga)";
}
Public function __construct($namaBarang="nama Barang", $merk="merk",$harga=0){
  $this->namaBarang = $namaBarang;
  $this->merk = $merk;
  $this->harga = $harga;
  }
}
class cetakInfoproduk{
  Public function cetakInfo(produk $produk){
    $str="{$produk->namaBarang},{$produk->getcetak()}";
     return $str;
    }
}
$produk1= new produk ("idepad 310","lenovo",7000000);
$produk2= new produk ("macbook Air","Apple",25000000);
$Infoproduk = new cetakInfoproduk();

echo "Nama Barang Laptop1 : " . $produk1->getcetak();
echo "<br>";
echo "Nama Barang Laptop2 : " .$produk2->getcetak();
echo "<br>";
echo $Infoproduk->cetakInfo($produk1);