<?php
INCLUDE '../Matrix.php';

class Soal3b extends Matrix{
    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;

        for ($i=0; $i <$this->baris ; $i++) {
            $dataJ=1;
            for ($j=0; $j < $this->kolom; $j++) {
                 if ($j<=($this->kolom-1)/2) {
                    $this->matrix[$i][$j]="".$dataJ;
                    //mirroring
                    $this->matrix[$i][$this->kolom-1-$j]="".$dataJ;
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
