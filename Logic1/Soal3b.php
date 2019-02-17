<?php
INCLUDE '../Matrix.php';
class Soal3b extends Matrix{

    
    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;
        for ($i=0;$i<$this->baris;$i++){
            for ($j=0;$j<$this->kolom;$j++){
                if ($i==$j){
                    $this->matrix[$i][$j] = "*";
                }elseif($i+$j==$this->kolom-1){
                    $this->matrix[$i][$j] = "-";

                }
               
            }
        }
    }

    public function showMatrix(){
        echo "<table  border='1'>";
        for ($i=0;$i<$this->baris;$i++){
            echo "<tr>";
            for ($j=0;$j<$this->kolom;$j++){
                echo "<td style='padding:10px' >";
                    echo @$this->matrix[$i][$j]." " ;
                echo "</td>";
            }
             echo "<tr/>";  
        }
        echo "</table>";
       
    }


}

$jawab = new Soal3b();
$jawab -> form1();
if(@$_POST['input'] != null){
    echo "number :". @$_POST['input']."<p/>";
    $jawab->setMatrix($_POST['input']);
    $jawab->showMatrix();
}
