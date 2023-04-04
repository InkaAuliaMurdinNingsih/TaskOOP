<?php

class Lingkaran {
    public function NamaBangun(){
        return "Lingkaran";
    }
    public function LuasLingkaran(float $phi,int $r){
        return $phi *$r *$r;
    }
    public function KelilingLingkaran(float $phi,int $r){
        return $phi *2 *$r;
    }
}

class Persegi{
    public function NamaBangun(){
        return "Persegi";
    }
    public function LuasPersegi (int $s){
        return $s * $s;
    }
    public function KelilingPersegi(int $s){
        return 4 * $s;
    }
}
 
class PersegiPanjang{
    public function NamaBangun(){
        return "Persegi Panjang";
    }
    public function LuasPersegiPanjang(int $p, int $l){
        return $p * $l;
    }
    public function KelilingPersegiPanjang(int $p, int $l){
        return 2 * ($p * $l);
    }
    
}

$lingkaran = new Lingkaran ();
echo " Bangun datar ini adalah " .$lingkaran->NamaBangun(), " yang memiliki luas " .$lingkaran->LuasLingkaran(3.14, 5), " dan keliling " .$lingkaran->KelilingLingkaran(3.14, 5);
echo "<br/>";
$persegi = new Persegi();
echo " Bangun datar ini adalah " .$persegi->NamaBangun(), " yang memiliki luas " .$persegi->LuasPersegi(5), "dan memiliki keliling " .$persegi->KelilingPersegi(5);
echo "<br/>";
$persegipanjang = new PersegiPanjang();
echo " Bangun datar ini adalah " .$persegipanjang->NamaBangun(), " yang memiliki luas " .$persegipanjang->LuasPersegiPanjang(5,10), " dan memeiliki keliling " .$persegipanjang->KelilingPersegiPanjang(5,10);
echo "<br/>";