<?php
//array
$name = 'windu';
$age =22;

//seting index
$data = array();
$data[0]= $name;
$data[1]= $age;
$data[2]= new DateTime();
$data[3]= array();

//otomatis
$data2= array(
    0=>'Jakarta',
    1=>'Surabaya',
    2=>'bandung'
);

$countries =array(
    'Indonesia'=>array(
        0=> 'jakarta',
        1=>'Bandung'   
    ),
    'Amerika'=>array(
        0=> 'LA',
        1=>'NYC'   
    )
);

$value = array(1,2,3,4,5,6);
$city = array('bandung','jakarta');

// array structure data 
$employe = array(
'nama'=>null,
'alamat'=>null,
'email'=>null
);
$employe['nama']= 'windu Muhammad Bagus';


echo "<pre>";
   // var_dump($countries['Amerika'][0]);
    var_dump($employe);
        // var_dump($data2);
echo"</pre>";
