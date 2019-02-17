<?php
INCLUDE '../Matrix.php';

Class Soal2b extends Matrix{
    public function setMatrix($n){

        $this->baris=$n;
        $this->kolom=$n;

        $dataI=(($n*2)-2); ///mulai ini
        for ($i=0; $i <$this->baris; $i++) { 
            // $dataJ=1;
            for ($j=0; $j <$this->kolom ; $j++) {
                if ($i+$j==$this->kolom-1){
                    $this->matrix[$i][$j]="".$dataI;
                    
                }
                //   $dataJ=$dataJ+2;
            }
            $dataI=$dataI-2;
        }

    }

    
}


echo "No : ".@$_POST['input']."<p/>";
$jawab= new Soal2b();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();