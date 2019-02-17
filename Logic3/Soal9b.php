<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal9b extends Matrix{

	public function __construct(){
		$this->deret= new DeretAngka();
	}
	public function setMatrix($n){
		$this->baris = $n;
        $this->kolom = $n;
        

        $fibo=$this->deret->getFibo($n);
        
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if($i - $j <= 0 && $i + $j <= $this->kolom - 1){
					if($i % 2 == 0){
						$this->matrix[$i][$j] = "".$fibo[$i/2];
					} else {
						$this->matrix[$i][$j] = " ";
                    }
                }

                if($i-$j<=0 &&$i+$j>=$this->kolom-1){
                    if($j%2==0){
                        $this->matrix[$i][$j] = "". $fibo[($n-$j)/2];
					} else {
						$this->matrix[$i][$j] = " ";
                    }
                }
                if($i-$j>=0 &&$i+$j>=$this->kolom-1){
                    if($i%2==0){
                        $this->matrix[$i][$j] = "". $fibo[($n-$i)/2];
					} else {
						$this->matrix[$i][$j] = " ";
                    }
                }
                if($i-$j>=0 &&$i+$j<=$this->kolom-1){
                    if($j%2==0){
                        $this->matrix[$i][$j] = "". $fibo[($j+1)/2];
					} else {
						$this->matrix[$i][$j] = " ";
                    }
                }
			}
		}
	}
}

$jawab = new Soal9b();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

