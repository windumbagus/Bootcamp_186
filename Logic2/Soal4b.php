<?php
INCLUDE '../Matrix.php';

class Soal3b extends Matrix{
    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;
        
        $dataI2=1;
        $dataI=($n*2)-2;
        
        for ($i=0; $i <$this->baris ; $i++) {
            $dataJ=1;
            $dataJ2=0;
            for ($j=0; $j < $this->kolom; $j++) {
                if ($i+$j==$this->kolom-1) {
                    $this->matrix[$i][$j]="".$dataI;
                } 
                if($i-$j==0) {
                    $this->matrix[$i][$j]="".$dataJ;
                }
                if($j==($this->kolom-1)/2) {
                    $this->matrix[$i][$j]="".$dataI2;
                }
                elseif($i==($this->baris-1)/2) {
                    $this->matrix[$i][$j]="".$dataJ2;
                }
                $dataJ=$dataJ+2;
                 $dataJ2=$dataJ2+2;
                    
            } 
            $dataI=$dataI-2;
            $dataI2=$dataI2+2;
                
       }
        
    }
}

$jawab = new Soal3b();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();
