<?php
INCLUDE '../Matrix.php';
INCLUDE '../Fibonaci.php';
class Fibonaci1 extends Matrix{

    private $deret;
    //init
    public function __construct(){
        $this->deret= new Fibonaci();
    }

    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;

        //$d= $this->deret->getFibonaci($n);

        // echo json_encode($d);
		// echo "<p/>";

        for ($i=0; $i < $this->baris ; $i++) { 
            for ($j=0; $j <$this->kolom; $j++) { 
                $this->matrix[$i][$j]="".$this->deret->getFib($i);
            }
        }
    }
}

$o=new Fibonaci1();
$o->setMatrix(@$_POST['input']);
$o->form1();
$o->showMatrix();

