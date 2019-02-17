<?php

INCLUDE 'Matrix.php';
INCLUDE 'DeretAngka.php';
INCLUDE 'pola.php';

class test_pola extends Matrix{

	public function __construct(){
		$this->pola= new pola();
	}
	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if($this->pola->arsirKananAtas($i,$j,$n)&& $this->pola->arsirKiriAtas($i,$j,$n)){
                    $this->matrix[$i][$j] = "-";
                }
				
			}
		}
	}
}

$jawab = new test_pola();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

