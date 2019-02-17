<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal6b extends Matrix{

	public function __construct(){
		$this->deret= new DeretAngka();
	}
	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
        
        $fibo=$this->deret->getFibo($n);
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                
                if($i-$j==0){//diagonal 1
                    $this->matrix[$i][$j] = $fibo[$i];
                }
                if($i+$j==$this->kolom-1){ //diagonal2
                    // $this->matrix[$i][$j] = $fibo[$this->kolom-1-$i];
                    $this->matrix[$i][$j] = $fibo[$j];
                }
                elseif($i+$j<=$this->kolom-1 && $i<$j){
                    $this->matrix[$i][$j] = "A ";
                }
                elseif($i+$j>=$this->kolom-1 && $i<$j){
                    $this->matrix[$i][$j] = "B ";
                }
                elseif($i+$j>=$this->kolom-1 && $i>$j){
                    $this->matrix[$i][$j] = "C ";
                }
                elseif($i+$j<=$this->kolom-1 && $i>$j){
                    $this->matrix[$i][$j] = "D ";
                }
				
			}
		}
	}
}

$jawab = new Soal6b();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

