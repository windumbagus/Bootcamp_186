<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal10b extends Matrix{

	public function __construct(){
		$this->deret= new DeretAngka();
	}
	public function setMatrix($n){
		$this->baris = $n;
        $this->kolom = $n;
        

        $fibo=$this->deret->getFibo($n);
        $char=$this->deret->getChars($n);
        
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if($i - $j <= 0 && $i + $j <= $this->kolom - 1){
					if($i % 2 == 0){
						$this->matrix[$i][$j] = "".$fibo[floor(($i)/2)];
					} else {
						$this->matrix[$i][$j] = "".$char[floor(($i)/2)];
                    }
                }

                if($i-$j<=0 &&$i+$j>=$this->kolom-1){
                    if($j%2==0){
                        $this->matrix[$i][$j] = "". $fibo[floor(($n-$j)/2)];
					} else {
						$this->matrix[$i][$j] = "".$char[floor(($n-$j-1)/2)];
                    }
                }
                if($i-$j>=0 &&$i+$j>=$this->kolom-1){
                    if($i%2==0){
                        $this->matrix[$i][$j] = "". $fibo[floor(($n-$i)/2)];
					} else {
						$this->matrix[$i][$j] = "".$char[floor(($n-$i-1)/2)];
                    }
                }
                if($i-$j>=0 &&$i+$j<=$this->kolom-1){
                    if($j%2==0){
                        $this->matrix[$i][$j] = "". $fibo[floor(($j)/2)];
					} else {
						$this->matrix[$i][$j] = "".$char[floor(($j)/2)];
                    }
                }
			}
		}
	}
}

$jawab = new Soal10b();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

