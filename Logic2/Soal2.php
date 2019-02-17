<?php
INCLUDE '../Matrix.php';

Class Soal2 extends Matrix{
    private $x=0;


    public function setMatrix($n){
        
        $this->baris=$n;
        $this->kolom=$n;
        $this->x=$this->kolom-1+$this->baris-1;
        for ($i=0; $i <$this->baris; $i++) {
        for ($j=0; $j <$this->kolom ; $j++) { 
            if($i+$j==$this->kolom-1){
                $this->matrix[$i][$j]=$this->x;
                $this->x--;
                $this->x--;
            }
                    } 
        # code...
    }      
    }
}

echo "<form method='POST'>";
echo "<input type='number' name='input'>";
echo "<input type='submit' value='submit'>";
echo "</form>";

echo "No :".@$_POST['input']."<p/>";
$jawab=new Soal2();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();