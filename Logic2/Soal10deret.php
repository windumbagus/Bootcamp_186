<?php
INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';
class Soal10deret extends Matrix{

    private $deret;
    //init
    public function __construct(){
        $this->deret= new Deretangka();
    }

    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;

        $d= $this->deret->getOddAndReverse($n);

        echo json_encode($d);
		echo "<p/>";

        for ($i=0; $i < $this->baris ; $i++) { 
            for ($j=0; $j <$this->kolom; $j++) { 
                $this->matrix[$i][$j]="".$d[$i];
            }
        }
    }
}

$o=new soal10deret();
$o->setMatrix(@$_POST['input']);
$o->form1();
$o->showMatrix();

