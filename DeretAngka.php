<?php

class DeretAngka{
	
	//0 2 4 6 4 2 0
	public function getOddAndReverse($n){
		$result = array();
		$data = 0;
		for($i = 0; $i < $n; $i++){
			//collect to result array
			$result[$i] = $data;
			
			if($i <= ($n-1)/2-1){
				$data = $data + 2;
			} else {
				$data = $data - 2;
			}
		}
		
		return $result;
	}
	// //1 3 5 7 5 3 1
	// public function getEvenAndReverse($n){
	// 	$result = array();
	// 	$data = 0;
	// 	for($i = 0; $i < $n; $i++){
	// 		//collect to result array
	// 		$result[$i] = $data;
			
	// 		if($i <= ($n-1)/2-1){
	// 			$data = $data + 1;
	// 		} else {
	// 			$data = $data - 1;
	// 		}
	// 	}
		
	// 	return $result;
	// }

	//single return data
	public function getTambah($n1,$n2){ //parameter
		$hasil=$n1+$n2;
		//echo $hasil;
		return $hasil;
	}

	//array return / multidata
	//0 1 2 3 4 5
	public function getIncrement($n){
		$hasil= array();
		$data=1;
		for ($i=0; $i < $n; $i++) { 
			$hasil[$i] =$data;
			$data=$data+1;
		}
		return $hasil;
	}

	//1 3 5 7 9
	public function getIncrementBy2($n){
		$hasil= array();
		$data=1;
		for ($i=0; $i < $n ; $i++) {
			$hasil[$i]=$data;
			$data=$data+2;
		}
		return $hasil;
	}
	
	//987654321
	public function getIncrementBy2Reverse($n){
		$hasil= array();
		$data=1;
		for ($i=0; $i < $n ; $i++) {
			$hasil[$n-1-$i]=$data;
			$data=$data+2;
		}
		return $hasil;
	}
	
// fibonaci 1 1 2 3 5 8
	public function getFibo($n){
		$result = array();
		$result[0]=1;
		$result[1]=1;

		for ($i=2; $i <$n ; $i++) { 
			$result[$i]= $result[$i-1] + $result[$i-2];
		}

		return $result;
	}

	public function getFibo3($n){
		$result = array();
		$result[0]=1;
		$result[1]=1;
		$result[2]=1;

		for ($i=3; $i <$n ; $i++) { 
			$result[$i]= $result[$i-1] + $result[$i-2]+$result[$i-3];
		}

		return $result;
	}

	public function getChars($n){
		$result= array();
		$char="A";
		for ($i=0; $i <$n ; $i++) { 
			$result[$i]=$char;
			$char++;
		}
		return $result;
	}

}	

$deret=new DeretAngka();
$result = $deret->getTambah(12,10); //argument
// echo $result;

// echo json_encode ($deret->getTambah(9,6));
// echo "<br/>".json_encode ($deret->getIncrement(9));
// echo "<br/>".json_encode ($deret->getIncrementBy2(9));
// echo "<br/>".json_encode ($deret->getIncrementBy2Reverse(9));
// echo "<br/>".json_encode ($deret->getFibo(9));
// echo "<br/>".json_encode ($deret->getFibo3(9));

// $result1=$deret->getIncrementBy2(9);
// $resust2=$deret->getIncrementBy2Reverse(9);
