<?php
Class Soal6{


    public function getSolution($n){
        echo "<table border='1'>";
        echo "<tbody>";
        for ($i=0;$i<$n;$i++){
            for ($j=0;$j<$n;$j++){
            if ($i+$j>=$n-1){
                echo "<td style='padding:10px'>*</td> ";
            }else{
                echo "<td></td>";
            }
            }    
                echo "<tr/>";
        }
    }
}

echo "<form method='POST'>";
    echo "Input :<input type='number' name='input'/>";
    echo "<input type='submit' value='submit'/>";
    echo "</form>";

    echo "number :".@$_POST['input']."<p/>";
    $jawab= new Soal6();
    $jawab->getSolution(@$_POST['input']);