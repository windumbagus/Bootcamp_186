<?php

class Fibonaci{
	
	//0 2 4 6 4 2 0
	public function getFib($n){
        if ($n<2){
        return 1; 
        }
        return $this->getFib($n-1)+$this->getFib($n-2);
		return $result;
    }
    
    public function getFib2($n){
        if ($n<3){
        return 1; 
        }
        return $this->getFib2($n-1)+$this->getFib2($n-2)+$this->getFib2($n-3);
		return $result;
	}
	
}	