<?php
Class Soal6{


    public function getSolution($n){
        for ($i=1;$i<$n;$i++){
            for ($j=1;$j<$n;$j++){
            if ($i>=$j){
                echo "* ";
            }else{
                echo "&nbsp&nbsp";
            }
            }    
                echo "<br/>";
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