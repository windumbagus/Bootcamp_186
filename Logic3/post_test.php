<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';
// INCLUDE '../pola.php';

class post_test extends Matrix{

	public function __construct(){
		$this->deret= new DeretAngka();
	}
	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n*2-1;
        
        $d=$this->deret->getFibo($n);
        
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if($i-$j==0){
                    $this->matrix[$i][$j] = "".$d[$i];
                }
                elseif($i+$j==($this->kolom-1)/2){
                    $this->matrix[$i][$j] = "".$d[$j];
                }
                elseif ($j>=($this->kolom-1)/2 && $i+($this->kolom-1)/2-$j==0){
                    $this->matrix[$i][$j] = "".$d[$this->kolom-1-$j];
                }
                elseif($j>=($this->kolom-1)/2 && $i+$j==($this->kolom-1)){
                    $this->matrix[$i][$j] = "".$d[$this->kolom-1-$j];
                }
                
				
			}
		}
	}
}

$jawab = new post_test();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

