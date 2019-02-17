<?php
INCLUDE '../Matrix.php';
INCLUDE '../Fibonaci.php';
class post_testb extends Matrix{

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
                if($j==($this->kolom-1)/2){
                    $this->matrix[$i][$j]="".$this->deret->getFib($i);
                }
                elseif($i-$j==0 && $i>=($this->baris-1)/2){
                    $this->matrix[$i][$j]="".$this->deret->getFib($this->kolom-1-$j);

                }
                elseif($i+$j==$this->kolom-1 && $i>=($this->baris-1)/2){
                    $this->matrix[$i][$j]="".$this->deret->getFib($j);

                }
            }
        }
    }
}

$o=new post_testb();
$o->setMatrix(@$_POST['input']);
$o->form1();
$o->showMatrix();

