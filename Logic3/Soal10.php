<?php

INCLUDE '../Matrix.php';
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
                if($i-$j==0 && $i<=($this->kolom-1)/2 && $i%2==0){
                    $this->matrix[$i][$j] = "".$d[$i/2];
                     $this->matrix[$this->kolom-1-$i][$j]="".$d[$i/2];
                }
                if($i+$j==$this->kolom-1 && $i<=($this->kolom-1)/2 && $i%2==0){
                    $this->matrix[$i][$j] = "".$d[$i/2];
                     $this->matrix[$this->kolom-1-$i][$j]="".$d[$i/2];
                }
                elseif($i<$j&& $i+$j<$this->kolom-1 && $i%2==0){
                         $this->matrix[$i][$j] = "".$d[$i/2]; //atas
                          $this->matrix[$this->kolom-1-$i][$j]="".$d[$i/2]; //bawah
                }
                elseif ($i>$j && $i+$j<=$this->kolom-1 && $j%2==0) {
                     $this->matrix[$i][$j]="".$d[$j/2];
                     $this->matrix[$i][$this->kolom-1-$j]="".$d[$j/2];
                }
                elseif($i-$j==0 && $i<=($this->kolom-1)/2 && $i%2==1){
                    $this->matrix[$i][$j] = "A";
                }
                
                
			}
		}
	}
}

$jawab = new Soal1();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

