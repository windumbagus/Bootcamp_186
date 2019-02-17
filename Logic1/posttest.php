<?php
Class posttest{


    public function getSolution($n){
        echo "<table border='1'>";
        echo "<tbody>";
        $t=($n-1)/2;
        for ($i=0;$i<$n;$i++){
            for ($j=0;$j<$n;$j++){
            if ($i+$j<=$n-1 && $i>=$j && $i<=$t){
                echo "<td style='padding:10px'>*</td> ";
            }elseif ($i+$j>=$n-1 && $i<=$j && $i>=$t){
                echo "<td style='padding:10px'>*</td> ";
            }else{
                echo "<td> </td>";
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
    $jawab= new posttest();
    $jawab->getSolution(@$_POST['input']);