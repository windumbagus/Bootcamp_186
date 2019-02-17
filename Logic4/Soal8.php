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
        $d= $this->deret->getIncrementBy2($n);
        $e=$this->deret->getDecrementBy2($n);
        echo json_encode($d)."<p/>";
        echo json_encode($e)."<p/>";
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                if($i+$j>=($this->kolom-1)/2 && $i-$j+($this->kolom-1)/2>=0 && $i<= ($this->baris-1)/2){
                    if($j<=($this->kolom-1)/2){
                        $this->matrix[$i][$j] = "".$d[$i+$j-($this->kolom-1)/2];
                        $this->matrix[$i][$this->kolom-1-$j] = "".$d[$i+$j-($this->kolom-1)/2];
                    }

                }
                elseif($i-$j-($this->kolom-1)/2<=0 && $i+$j-($this->kolom-1)<=($this->kolom-1)/2 && $i>=($this->kolom-1)/2){
                    if($j<=($this->kolom-1)/2){
                    $this->matrix[$i][$j] = "".$e[$i-$j];
                    $this->matrix[$i][$this->kolom-1-$j] = "".$e[$i-$j];
                    }
                }
			}
		}
	}
}

$jawab = new Soal();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

