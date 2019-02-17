
<?php
//echo "hallo World";

//variable
$name   ="Windu";
$age    =22;
$email   ='windumbagus@gmail.com';

//concat (nambung nyambungin data)
echo "Haloo, ". $name . " your age : ".$age." email : ".$email;
echo "<br>";
// bukan concat
echo "Haloo, . $name .  your age : .$age. email : .$email";

//debuging  php var var_dump
echo "<pre>";
var_dump($name);
var_dump($age);
var_dump($email);
echo "</pre>";

//looping
for ($i=0;$i<5;$i++){
    echo "<br>".$i;
}

// if else
echo "<br><br>";

if($name =='Windu'){
    echo "".$name;
}else{
    echo "yang lain";
}