<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';
INCLUDE '../pola.php';

class Soal extends Matrix{

	public function __construct(){
		$this->deret= new DeretAngka();
	}
	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n*2-1;
    
        $d=$this->deret->getIncrementBy2($this->kolom);

		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if($i+($this->kolom-1)/2+$j>=$this->kolom-1 && $i-$j+($this->kolom-1)/2>=0 ){
                    if($j<=($this->kolom-1)/2){
                        $this->matrix[$i][$j] = "". $d[$i+$j-($this->kolom-1)/2];
                        $this->matrix[$i][$this->kolom-1-$j] = "". $d[$i+$j-($this->kolom-1)/2];
                    }
                    
                }
			}
		}
	}
}

$jawab = new Soal();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

