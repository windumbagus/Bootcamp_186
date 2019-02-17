<?php
INCLUDE '../Matrix.php';

class Soal3b extends Matrix{
    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;

        
        for ($i=0; $i <$this->baris ; $i++) {
            $dataJ=1;
            for ($j=0; $j < $this->kolom; $j++) {
                 
                if($i>=$j) {
                    $this->matrix[$i][$j]="".$dataJ;
                }
                $dataJ=$dataJ+2;    
            } 
                
       }
        
    }
}

$jawab = new Soal3b();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();
