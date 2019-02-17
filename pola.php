<?php

class pola{

    public function diagonalSatu($i,$j,$n){
        if ($i-$j==0) return true;
    }
    public function diagonalDua($i,$j,$n){
        if ($i+$j==($n-1)) return true;
    }
    public function vertikal($i,$j,$n){
        if ($j==($n-1)/2) return true;
    }
    public function horisontal($i,$j,$n){
        if ($i==($n-1)/2) return true;
    }
    public function arsirKiriAtas($i,$j,$n){
        if ($i+$j<=$n-1) return true;
    }
    public function arsirkananBawah($i,$j,$n){
        if ($i+$j>=$n-1) return true;
    }
    public function arsirkananAtas($i,$j,$n){
        if ($i-$j<=0) return true;
    }
    public function arsirkiriBawah($i,$j,$n){
        if ($i-$j>=0) return true;
    }
    public function arsirAtas($i,$j,$n){
        if($i<=($n-1)/2) return true;
    }
    public function arsirBawah($i,$j,$n){
        if($i>=($n-1)/2) return true;
    }
    public function arsirKiri($i,$j,$n){
        if($j<=($n-1)/2) return true;
    }
    public function arsirKanan($i,$j,$n){
        if($j>=($n-1)/2) return true;
    }
    

}