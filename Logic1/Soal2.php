<?php
Class Soal2{

public function getSolution($n){
    for ($i=0;$i<$n;$i++){
        for ($j=0;$j<$n;$j++){
            if ($i+$j==$n-1){
                echo "*";
            }else{
                echo "&nbsp";
            } 
        }
        echo"<br/>";
    }
}

}

echo "<form method='POST'>";
echo "Input : <input type='number' name='input'/>";
echo "<input type='submit' value='submit'/>";
echo "</form>";

if(@$_POST['input'] != null){
    echo "number :".@$_POST['input']."<p/>";
    $jawab = new Soal2();
    $jawab->getSolution(@$_POST['input']);
}
