<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal7b extends Matrix{

	public function __construct(){
		$this->deret= new DeretAngka();
	}
	public function setMatrix($n){
		$this->baris = $n;
        $this->kolom = $n;
        
        $fibo= $this->deret->getFibo($n);
        $a=0;
        $d=$n-1;
        for($i = 0; $i < $this->baris; $i++){
            $b=0;
            $c=$n-1;
			for($j = 0; $j < $this->kolom; $j++){
                if ($i-$j<=0 && $i+$j<=$this->kolom-1) { //atas    
                $this->matrix[$i][$j] = "".$fibo[$a];
                }
                elseif ($i-$j<=0 && $i+$j>=$this->kolom-1) { //kanam    
                    $this->matrix[$i][$j] = "".$fibo[$c];
                }
                elseif($i+$j>=$this->kolom-1){ //kiri   
                     $this->matrix[$i][$j] = "".$fibo[$d];
                }
                else{
                     $this->matrix[$i][$j] = "".$fibo[$b];
                }
                $b=$b+1;
                $c=$c-1;
                      			
            }
            $a=$a+1;
            $d=$d-1;  
            
        }
            
	}
}

$jawab = new Soal7b();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

