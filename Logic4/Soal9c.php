<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';
INCLUDE '../pola.php';

class Soal extends Matrix{

	public function __construct(){
		$this->deret= new DeretAngka();
	}
	public function setMatrix2($n,$n2){
		$this->baris = $n;
		$this->kolom = ($n2*$n)-($n2-1) ;
    
                $addBangun=0;
            for ($k=0; $k <$n2 ; $k++) { 
                for($i = 0; $i < $this->baris; $i++){
                    $index=1;
                   for($j = 0; $j < $this->kolom; $j++){
                        if($i+$j>=($n/2)-1 && $j-$i<=($n/2) && $i<=($n/2)){
                            $this->matrix[$i][$j+$addBangun]="$index";
                            $this->matrix[$this->baris-1-$i][$j+$addBangun]="$index";                            

                            if($j<=floor($n/2)-1){
                                $index=$index+2;
                            }else{
                                $index=$index-2;
                            }
                            
                        }
                    }
                }
                $addBangun=$addBangun + $n-1;
            }

	}
}


$x = new Soal();
$x->form2();
$x->setMatrix2(@$_POST['input1'],@$_POST['input2']);
$x->showMatrix();
