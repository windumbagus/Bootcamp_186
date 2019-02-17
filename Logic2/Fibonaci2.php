<?php
INCLUDE '../Matrix.php';
INCLUDE '../Fibonaci.php';

Class Fibonaci2 extends Matrix{

    public function __construct(){
        $this->deret=new Fibonaci();    
    }

    public function setMatrix($n){

        $this->baris=$n;
        $this->kolom=$n;

        for ($i=0; $i <$this->baris ; $i++) {
            for ($j=0; $j <$this->kolom ; $j++) { 
                if($j==($this->kolom-1)/2){
                    $this->matrix[$i][$j]="".$this->deret->getFib($i);
                }
                if($i==($this->baris-1)/2){
                    $this->matrix[$i][$j]="".$this->deret->getFib($j);
                }
                if($i-$j==0){
                    $this->matrix[$i][$j]="".$this->deret->getFib($j);
                }
                if($i+$j==($this->kolom-1)){
                    $this->matrix[$i][$j]="".$this->deret->getFib($i);
                }
                
                
            } 
            
        }
        
    }
}

$jawab= new Fibonaci2();
$jawab->setMatrix(@$_POST['input']);
$jawab->form1();
$jawab->showMatrix();
