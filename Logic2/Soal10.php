<?php
INCLUDE '../Matrix.php';
class Soal3 extends Matrix{
private $x=0;
    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;
        $this->x=0;

        for ($i=0; $i < $this->baris ; $i++) {
               for ($j=0; $j < $this->kolom; $j++) {
                $this->matrix[$i][$j]=$this->x;              
            } 
            if ($i< ($this->baris-1)/2){
                $this->x++;
                $this->x++; 
            } else {
                $this->x--;
                $this->x--;        
            }
        }
    }
}

echo "<form method='POST'>";
echo "<input type='number' name='input'>";
echo "<input type='submit' value='submit'>";
echo "</form>";

echo "No :".@$_POST['input']."<p/>";
$jawab=new Soal3();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();