<?php
INCLUDE '../Matrix.php';
class Soal3 extends Matrix{
private $x=0;
private $y=1;
private $z=1;

private $a=0;
private $b=1;
private $c=1;

    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;
       

        for ($i=0; $i < $this->baris ; $i++) {
            for ($j=0; $j < $this->kolom; $j++) { 
                if( $j==($this->kolom-1)/2){
                    ;
                    $this->matrix[$i][$j]=$this->z;
                }elseif($i==$j && $i>($this->kolom-1)/2) {//
            
                }
            } 
            # code...$this->z=$this->x+$this->y;
                    $this->x=$this->y;
                    $this->y=$this->z;
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