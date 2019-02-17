<?php
class Soal5f{
    private $baris=0;
    private $kolom=0;    
    private $matrix=array();

    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;

        for ($i=0; $i <$this->baris ; $i++) {
            for ($j=0; $j <$this->kolom ; $j++) { 
                if ($i==$j||$i+$j==$this->kolom-1||$i==0||$j==0||$i==$this->kolom-1||$j==$this->kolom-1){
                    $this->matrix[$i][$j]="*";  
                }
            }
            
        }
    }

    public function showMatrix(){

        echo "<table border='1' style='border-collapse: collapse'>";
        echo "<tbody>";
        for ($i=0; $i <$this->baris ; $i++) {
            echo "<tr>";
            for ($j=0; $j <$this->kolom ; $j++) {
                echo "<td>"; 
                echo @$this->matrix[$i][$j];
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
}

echo "<form method='POST'>";
echo "<input type='number' name='input'/>";
echo "<input type='submit' value='submit'/><p/>";
echo "<form/>";

echo "No : ".@$_POST['input']."<p/>";
$jawab = new Soal5f();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();