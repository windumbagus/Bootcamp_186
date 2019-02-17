<?php

INCLUDE '../Matrix.php';
// INCLUDE '../Fibonaci.php';
INCLUDE "../DeretAngka.php";

class Soal1 extends Matrix{

    public function __construct(){
     $this->deret=new DeretAngka();
    }

	public function setMatrix($n){
		$this->baris = $n;
        $this->kolom = $n;
        

        $d= $this->deret->getFibo($n);

		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
                
                if($i-$j==0 && $i<=($this->kolom-1)/2){
                    $this->matrix[$i][$j] = "".$d[$i];
                     $this->matrix[$this->kolom-1-$i][$j]="".$d[$i];
                }
                if($i+$j==$this->kolom-1 && $i<=($this->kolom-1)/2){
                    $this->matrix[$i][$j] = "".$d[$i];
                     $this->matrix[$this->kolom-1-$i][$j]="".$d[$i];
                }
                elseif($i<$j&& $i+$j<$this->kolom-1){
                        $this->matrix[$i][$j] = "".$d[$i]; //atas
                        $this->matrix[$this->kolom-1-$i][$j]="".$d[$i]; //bawah
                }
                elseif ($i+$j<$this->kolom-1 && $i>$j) {
                    $this->matrix[$i][$j]="".$d[$j]; // kiri
                    $this->matrix[$i][$this->kolom-1-$j]="".$d[$j]; //kanan
             
                }

                
			}
		}
	}
}

$jawab = new Soal1();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

