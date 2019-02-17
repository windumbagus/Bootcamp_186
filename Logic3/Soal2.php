<?php

INCLUDE '../Matrix.php';
INCLUDE '../Fibonaci.php';

class Soal2 extends Matrix{

    public function __construct(){
        $this->deret= new Fibonaci();
    }

	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if ($i==0){
                    $this->matrix[$i][$j] = "".$this->deret->getFib2($j);
                }
			}
		}
	}
}

$jawab = new Soal2();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

