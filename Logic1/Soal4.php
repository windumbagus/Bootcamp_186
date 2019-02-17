<?php
class Soal4{

    // private $baris = 0;
    // private $kolom = 0;
    
    public function getSolution($n){
        for ($i=0;$i<$n;$i++){
            for ($j=0;$j<$n;$j++){
                if ($i==$j){
                    echo "* ";
                }elseif ($i+$j==$n-1) {
                    echo "* ";
                }elseif ($i==($n-1)/2) {
                    echo "* ";
                }elseif ($j==($n-1)/2) {
                    echo "* ";
                }else{
                    echo "&nbsp&nbsp&nbsp";
                }

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
    $jawab = new Soal4();
    $jawab->getSolution($_POST['input']);
}
