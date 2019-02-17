<?php
Class Soal1{
    private $baris =0;
    private $kolom =0;
    private $matrix =array();
    private $x=1;
    private $y=1;
    public function setMatrix($n){

        $this->baris=$n;
        $this->kolom=$n;

        $dataI=1;
        for ($i=0; $i <$this->baris; $i++) { 
            $dataJ=0;
            for ($j=0; $j <$this->kolom ; $j++) {
                if ($i==$j){
                    @$this->matrix[$i][$j]=$dataI;
                    //$this->x++;
                }
                  $dataJ=$dataJ+1;
            }
            $dataI=$dataI+2;
        }

    }

    public function showMatrix(){
        echo "<table border='1'>";
        for ($i=0; $i <$this->baris; $i++) { 
            echo "<tr>";
            for ($j=0; $j <$this->kolom ; $j++) { 
                echo "<td>";
                echo @$this->matrix[$i][$j];
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

echo "<form method='POST'>";
echo "<input type='number' name='input'>";
echo "<input type='submit' value='submit'>";
echo "</form>";

echo "No : ".@$_POST['input']."<p/>";
$jawab= new Soal1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();