<?php
INCLUDE '../Matrix.php';
Class Soal1b extends Matrix{
    public function setMatrix($n){

        $this->baris=$n;
        $this->kolom=$n;
        

        $dataI=1;
        for ($i=0; $i < $this->baris; $i++) { 
            $dataJ=1;
            for ($j=0; $j <$this->kolom ; $j++) { 
                if ($i-$j==0){
                    $this->matrix[$i][$j]=$dataI;    
                }
                $dataJ=$dataJ+2;
            }
            $dataI=$dataI+2;
        }
        
    }
}

$jawab= new Soal1b();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();