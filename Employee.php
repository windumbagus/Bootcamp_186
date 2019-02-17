<?php

class Employee{
 
    private $name;
    private $nip;
    private $email;

    //constructor
    public function __construct($nip,$name,$email){
        $this->nip = $nip;
        $this->name = $name;
        $this->email = $email;

    }

    public function getInfo(){

        echo "hallo :".$this->name."email: ".$this->email."NIP : ".$this->nip;
    }
}


 //call get info
 $emp = new Employee('0798908','Windu','windumbagus@gmail.com'); //instansiasi //getInstance
 $emp->getInfo();
 echo"<pre>";
 var_dump($emp);
 echo"</pre>";
