<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';
INCLUDE '../pola.php';

class Soal extends Matrix{

	public function __construct(){
		$this->deret= new DeretAngka();
	}
	public function setMatrix2($n,$n2){
		$this->baris = $n;
		$this->kolom = $n;
		// $this->kolom = $n2*$n;
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if($i-$j==0){
                    $this->matrix[$i][$j] = "-";
                }elseif($h+$i==$n-1){
                    $this->matrix[$i][$j] = "+";
                }
                
			}
		}
	}
}

$jawab = new Soal();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();
