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
		$this->kolom = $n2*$n-1;
    
        $d=$this->deret->getFibo($n);
        $e=$this->deret->getChars($n);
echo json_encode($e);
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if($i-$j==0 ){
                    $this->matrix[$i][$j] = "".$d[$i];
                }elseif($i+$j==$this->baris-1){
                    $this->matrix[$i][$j] = "".$d[$j];  
                }elseif ($i+$j== $this->baris-2||$i+$j== $this->baris){
                    $this->matrix[$i][$j] = " ";
                }elseif ($i-$j==1||$j-$i==1){
                    $this->matrix[$i][$j] = " ";
                }
                elseif ($i+$j<=$this->baris-1 && $i-$j<=0 && $j<=($this->baris-1)/2){
                    $this->matrix[$i][$j] = "".$e[$j-$i-2];
                    $this->matrix[$i][$this->baris-1-$j] = "".$e[$j-$i-2];
                }
                elseif ($i+$j<=$this->baris-1 && $i-$j>=0 &&$i<=($this->baris-1)/2){
                    $this->matrix[$i][$j] = "".$e[$i-$j-2];
                    $this->matrix[$this->baris-1-$i][$j] = "".$e[$i-$j-2];
                }
                elseif ($i+$j>=$this->baris-1 && $i-$j>=0 && $j<=($this->baris-1)/2){
                    $this->matrix[$i][$j] = "".$e[$i+$j-10];
                    $this->matrix[$i][$this->baris-1-$j] = "".$e[$i+$j-10];
                }
                if($j>=$this->baris){
                    $this->matrix[$i][$j] = @$this->matrix[$i][$this->kolom-1-$j];

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
