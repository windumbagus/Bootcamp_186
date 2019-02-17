<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal8b extends Matrix{

	public function __construct(){
		$this->deret= new DeretAngka();
	}
	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
        
        // $d= $this->deret->getIncrement($n);
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if($i - $j <= 0 && $i + $j <= $this->kolom - 1){
					if($i % 2 == 0){
						$this->matrix[$i][$j] = "". ($i+1);
					} else {
						$this->matrix[$i][$j] = " ";
                    }
                }

                if($i-$j<=0 &&$i+$j>=$this->kolom-1){
                    if($j%2==0){
                        $this->matrix[$i][$j] = "". ($n-$j);
					} else {
						$this->matrix[$i][$j] = " ";
                    }
                }
                if($i-$j>=0 &&$i+$j>=$this->kolom-1){
                    if($i%2==0){
                        $this->matrix[$i][$j] = "". ($n-$i);
					} else {
						$this->matrix[$i][$j] = " ";
                    }
                }
                if($i-$j>=0 &&$i+$j<=$this->kolom-1){
                    if($j%2==0){
                        $this->matrix[$i][$j] = "". ($j+1);
					} else {
						$this->matrix[$i][$j] = " ";
                    }
                }

				
			}
		}
	}
}

$jawab = new Soal8b();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

