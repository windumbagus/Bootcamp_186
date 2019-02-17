<?php
INCLUDE '../Matrix.php';
class Soal4 extends Matrix{

    private $x=0;
    private $y=0;
    private $z=0;
    private $a=0;
    private $b=0;
    
    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;
        $this->x=1;
        $this->y=($this->kolom-1)/2;
        $this->z=1;
        $this->a=$this->baris-1+$this->kolom-1;
        $this->b=0;

        // $this->baris-1+$this->kolom-1
        for ($i=0; $i < $this->baris; $i++) {
            for ($j=0; $j <$this->kolom ; $j++) { 


                if ($i+$j==$this->kolom-1){// diagonal kanan atas
                    $this->matrix[$i][$j]=$this->a;
                    $this->a--;
                    $this->a--;
                }
                if ($i==$this->y){// horisontal
                    $this->matrix[$i][$j]=$this->b;
                    $this->b++;
                    $this->b++;
                }
                if ($i==$j){ //diagonal kiri atas
                    $this->matrix[$i][$j]=$this->x;
                    $this->x++;
                    $this->x++;
                }
                if ($j==$this->y){ //vertikal
                    $this->matrix[$i][$j]=$this->z;
                    $this->z++;
                    $this->z++;
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
$jawab=new Soal4();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();