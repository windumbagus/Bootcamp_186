<?php
INCLUDE '../Matrix.php';
class Soal3 extends Matrix{
private $x=0;
private $y=0;
    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;
        $this->y=1;
 

        for ($i=0; $i < $this->baris ; $i++) {
            $this->y=1;
            for ($j=0; $j < $this->kolom; $j++) { 
                    if($i>=$j){
                    $this->matrix[$i][$j]=$this->y;
                    $this->y++;
                    $this->y++;
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