<?php
INCLUDE '../Matrix.php';
class Soal3 extends Matrix{
private $x=0;
private $y=0;

    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;
        $this->x=1;
        $this->y=$this->kolom-1+$this->baris-1;


        for ($i=0; $i < $this->baris ; $i++) {
            for ($j=0; $j < $this->kolom; $j++) { 
                if ($i+$j<=$n-1 && $i<=$j){
                    $this->matrix[$i][$j]="A";
                }
                elseif ($i+$j>=$n-1 && $i>=$j){
                    $this->matrix[$i][$j]="B";
                }
                if($j+$i==$this->kolom-1){
                    @$this->matrix[$i][$j]=$this->y;
                    $this->y--;
                    $this->y--;
                }
                if ($i==$j){
                    @$this->matrix[$i][$j]=$this->x;
                    $this->x++;
                    $this->x++;
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