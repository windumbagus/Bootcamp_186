<?php
INCLUDE '../Matrix.php';
class Soal3 extends Matrix{
private $x=0;


    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;
        $this->x=1;



        for ($i=0; $i < $this->baris ; $i++) {
            $this->x=1;
            for ($j=0; $j < $this->kolom; $j++) { 
                if ($j< ($this->kolom-1)/2){
                    $this->matrix[$i][$j]=$this->x;
                    $this->x++;
                    $this->x++;
                }else{
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
$jawab=new Soal3();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();