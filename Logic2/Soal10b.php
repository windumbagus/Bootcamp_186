<?php
INCLUDE '../Matrix.php';

class Soal3b extends Matrix{
    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;
        $dataI=0;
        for ($i=0; $i <$this->baris ; $i++) {
            for ($j=0; $j < $this->kolom; $j++) {
                 if ($i<=($this->kolom-1)/2) {
                    $this->matrix[$i][$j]="".$dataI;
                    //mirroring
                    $this->matrix[$this->kolom-1-$i][$j]="".$dataI;
                }
                    
            } 
            $dataI=$dataI+2;
        }
        
    }
}

$jawab = new Soal3b();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();
