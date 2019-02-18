<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';
INCLUDE '../pola.php';

class Soal extends Matrix{

	// public function __construct(){
	// 	$this->deret= new DeretAngka();
	// }
	public function setMatrix($n){
		$this->baris = $n*2+1;
		$this->kolom = $n*2+1;
		// $this->kolom = $n2*$n;
		for ($k=0; $k < $n ; $k++) { 
            $this->matrix[$n][$n] = "*";    
        }
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if($i-$j==0){
                    $this->matrix[$i][$j] = @$this->matrix[$n][$n];
                    
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
