<?php

Class Soal5b{
    private $baris =0;
    private $kolom =0;
    private $matrix =array();

    public function setMatrix($n){
        $this->baris=$n;
        $this->kolom=$n;

        for ($i=0;$i<$this->baris;$i++){
            for($j=0;$j<$this->kolom;$j++){
                if ($i==$j || $i+$j==$this->kolom-1 || $i==0 || $i==$this->kolom-1 || $j==0||$j==$this->kolom-1){
                    $this->matrix[$i][$j]="*";    
                }
                
            }
        }
    }

    public function showMatrix(){
        echo "<table border='1'>";
        for($i=0;$i<$this->baris;$i++){        
            echo "<tr>"; 
            for($j=0;$j<$this->kolom;$j++){
                echo "<td style='padding:10px' >";    
                echo @$this->matrix[$i][$j];
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

}

echo "<form method='POST'>";
echo "input : <input type='number' name='input'/>";
echo "<input type='submit' value='submit'/>";
echo "</form>";

if ($_POST['input'] != null){
    echo "number :".$_POST['input']."<p/>";
    $jawab= new Soal5b();
    $jawab->setMatrix($_POST['input']);
    $jawab->showMatrix();
}