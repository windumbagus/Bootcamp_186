<?php

INCLUDE '../Matrix.php';
INCLUDE '../Fibonaci.php';
// INCLUDE "../DeretAngka.php";

class Soal1 extends Matrix{

    public function __construct(){
        $this->deret=new Fibonaci();
        // $this->deret2=new DeretAngka();
    }

	public function setMatrix($n){
		$this->baris = $n;
        $this->kolom = $n;
        
        // $d= $this->deret2->getOddAndReverse($n);

		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if($i-$j==0){
                    $this->matrix[$i][$j] = "".$this->deret->getFib($j);
                }
                if($i+$j==$this->kolom-1){
                    $this->matrix[$i][$j] = "".$this->deret->getFib($j);
                }
                elseif($i<$j&& $i+$j<$this->kolom-1){
                    $this->matrix[$i][$j] = "A";
                }
                elseif($i<$j&& $i+$j>$this->kolom-1){
                    $this->matrix[$i][$j] = "B";
                }
                elseif($i>$j&& $i+$j<$this->kolom-1){
                    $this->matrix[$i][$j] = "C";
                }
                elseif($i>$j&& $i+$j>$this->kolom-1){
                    $this->matrix[$i][$j] = "D";
                }
                // elseif($i+$j==($this->kolom-1)){
                //     @$this->matrix[$i][$j] = "".$d[$i];
                // }


			}
		}
	}
}

$jawab = new Soal1();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

