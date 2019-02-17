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
    $d= $this->deret->getIncrementBy2($this->kolom);	
    
    echo json_encode($d);
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if ($i-$j<=0 && $i+$j<=$this->kolom-1){
                    if ($j<=($this->kolom-1)/2){
                        $this->matrix[$i][$j] = "".$d[$j-$i];
                        $this->matrix[$i][$this->kolom-1-$j] = "".$d[$j-$i];
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


