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
	$d=$this->deret->getIncrement($this->kolom);	
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if ($i+$j>=($this->kolom-1)/2 && $i+($this->kolom-1)/2-$j>=0){
                    $this->matrix[$i][$j] = "".$d[$i+$j-($this->kolom-1)/2];
                }
				
			}
		}
	}
}

$jawab = new Soal();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

