<?php   
class Soal5e{
    private $baris =0;
    private $kolom =0;
    private $matrix =array();

    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;
        for ($i=0; $i < $this->baris ; $i++) {
            for ($j=0; $j < $this->kolom; $j++) {
                if ($i==$j||$i+$j==$this->kolom-1||$i==0||$j==0||$i==$this->kolom-1||$j==$this->kolom-1){
                    $this->matrix[$i][$j]="*";
                } 
            } 
        }
    }

    public function showMatrix(){
        echo "<table border='1'>";
        for ($i=0; $i < $this->baris ; $i++) {
            echo "<tr>";
            for ($j=0; $j < $this->kolom; $j++) { 
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

echo "No :".@$_POST['input']."<br/>";
$jawab= new Soal5e();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();
// echo "<pre>";
// var_dump($jawab->getMatrix());
// echo "</pre>";
