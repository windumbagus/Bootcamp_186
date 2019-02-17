<?php
class Soal1{

    // private $baris = 0;
    // private $kolom = 0;
    
    public function getSolution($n){
        for ($i=0;$i<$n;$i++){
            for ($j=0;$j<$n;$j++){
                if ($i==$j){
                    echo "*";
                }else{
                    echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ";
                }
            //echo "($i.$j) ";
            }
            echo "<br/>";  
        }
        
    }

}


echo "<form method='POST'>";
echo "Input : <input type='number' name='input'/>";
echo "<input type='submit' value='submit'/>";
echo "</form>";

//getting number
if(@$_POST['input'] != null){
    echo "number :". @$_POST['input']."<p/>";
    $jawab = new Soal1();
    $jawab->getSolution($_POST['input']);
}
