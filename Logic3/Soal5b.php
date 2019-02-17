<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal5b extends Matrix{

    public function __construct(){
        $this->deret= new DeretAngka();
    }

	public function setMatrix($n){
		$this->baris = $n;
        $this->kolom = $n;
        
        $fibo=$this->deret->getFibo($n);
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if($j<=($this->kolom-1)/2){
                    $this->matrix[$i][$j] = "". $fibo[$j];
                    //mirror
                    $this->matrix[$i][$this->kolom-1-$j] = "". $fibo[$j];
                }
                if ($i+$j < $this->kolom-1 && $i>$j){
                    $this->matrix[$i][$j] = "";
                }
			}
		}
	}
}

$jawab = new Soal5b();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

