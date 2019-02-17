<?php
class Soal1b{

    private $baris = 0;
    private $kolom = 0;
    private $matrix = array();
    
    public function setMatrix($n){

        $this->baris= $n;
        $this->kolom= $n;
        
        for ($i=0;$i<$this->baris;$i++){
            for ($j=0;$j<$this->kolom;$j++){
                if ($i==$j){
                    $this->matrix[$i][$j] = "*";
                }
            }
            // echo "<br/>";  
        }
        
    }
    public function showMatrix(){
        echo "<table  border='1'>";
        for ($i=0;$i<$this->baris;$i++){
            for ($j=0;$j<$this->kolom;$j++){
                echo "<td style='padding:10px' >";
                //if (@$this->matrix[$i][$j]!= null){
                    echo @$this->matrix[$i][$j]." " ;
                // }else{
                //    echo "null";
                // }
                echo "</td>";
            }
             echo "<tr/>";  
        }
echo "</table>";
        // echo "<pre>";
        //     var_dump($this->matrix);
        // echo "</pre>";
    }

}


echo "<form method='POST'>";
echo "Input : <input type='number' name='input'/>";
echo "<input type='submit' value='submit'/>";
echo "</form>";

//getting number
if(@$_POST['input'] != null){
    echo "number :". @$_POST['input']."<p/>";
    $jawab = new Soal1b();
    $jawab->setMatrix($_POST['input']);
    $jawab->showMatrix();
}
