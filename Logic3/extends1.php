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
		// $this->kolom = $n2*$n;

		$d= $this->deret->getChars($n);	
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
				if($i-$j==0 && $j<=($this->kolom-1)/2){
					$this->matrix[$i][$j] = "".$d[$i];
					//MIROR
					$this->matrix[$i][$this->baris -1-$j] = "".$d[$i];
				}
				elseif($i+$j==$this->kolom-1 && $i>=($this->kolom-1)/2){
					$this->matrix[$i][$j] = "".$d[$j];
					//MIROR
					$this->matrix[$i][$this->baris -1-$j] = "".$d[$j];
				}
				elseif($i-$j<=0 && $i+$j<=$this->kolom-1 && $j<=($this->kolom-1)/2){
					$this->matrix[$i][$j] = "".$d[$i];//1
				}
				elseif($i-$j>=0 && $i+$j>$this->kolom-1 && $j>=($this->kolom-1)/2){
					$this->matrix[$i][$j] = "".$d[$i];
				}
				elseif($i-$j>=0 && $i+$j<=$this->kolom-1 && $i>=($this->baris-1)/2){
					$this->matrix[$i][$j] = "".$d[$j];//
				}
				elseif($i-$j<=0 && $i+$j>$this->kolom-1 && $i<=($this->baris-1)/2){
					$this->matrix[$i][$j] = "".$d[$j];//1
				}
				
				
			}
		}
	}
}

$jawab = new Soal();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

// $x = new Soal();
// $x->form2();
// $x->setMatrix2(@$_POST['input1'],@$_POST['input2']);
// $x->showMatrix();
