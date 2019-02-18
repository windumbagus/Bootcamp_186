<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';
INCLUDE '../pola.php';

class Soal extends Matrix{

	public function __construct(){
		$this->deret= new DeretAngka();
	}
	public function setMatrix2($n,$n2){
		$this->baris = $n;
		// $this->kolom = $n;
		$this->kolom = $n2*$n-1;
    
        $d= $this->deret->getIncrementBy2($n);   
        
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if($i+$j>=($this->baris-1)/2 && $i-$j+($this->baris-1)/2>=0 && $j<=($this->baris-1)/2   ){
                    if($i<=($this->baris-1)/2){
                        $this->matrix[$i][$j] = "".$d[$i+$j-($this->baris-1)/2];
                        $this->matrix[$i][$this->baris-1-$j] = "".$d[$i+$j-($this->baris-1)/2];
                        $this->matrix[$this->baris-1-$i][$j] = "".$d[$i+$j-($this->baris-1)/2];
                        $this->matrix[$this->baris-1-$i][$this->baris-1-$j] = "".$d[$i+$j-($this->baris-1)/2];
                    }else if ($j>=$this->baris-1){	
						$this->matrix[$i][$j] = @$this->matrix[$i][$j-$this->baris+1];
					}   
                }              
			}
		}
	}
}

// $jawab = new Soal();
// $jawab->form1();
// $jawab->setMatrix(@$_POST['input']);
// $jawab->showMatrix();

$x = new Soal();
$x->form2();
$x->setMatrix2(@$_POST['input1'],@$_POST['input2']);
$x->showMatrix();
