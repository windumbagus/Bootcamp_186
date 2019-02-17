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
		$this->kolom = $n;
    $d=$this->deret->getIncrement($this->kolom);
    $e=$this->deret->getDecrement($this->kolom);
    
    echo json_encode($e);
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if ($j+$i>=($this->kolom-1)/2 && $i+($this->kolom-1)/2-$j>=0 && $i<=($this->baris-1)/2){
                    $this->matrix[$i][$j] = "".$d[$i+$j-($this->kolom-1)/2];
                }
                elseif($i+($this->baris-1)/2<=$j+($this->kolom-1) && $j+$i-($this->kolom-1)/2<=($this->kolom-1)&& $i>=($this->baris-1)/2){
                    $this->matrix[$i][$j] = "".$e[$i-$j+($this->kolom-1)/2];
                }
              
				
			}
		}
	}
}

$jawab = new Soal();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();
