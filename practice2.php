<?php 

class A 
{ 
	private $sumAr; 
	private $pp;

	public function sumNumber($r) 
	{ 
		$this->sumAr = array_sum($r); 
		$this->printNumber($r); 
		echo "<br>" . "Sum result : ". $this->sumAr; 
	} 

	public function printNumber($p) 
	{ 
		echo "Number : "; 
		foreach ($p as $pp) 
		{ 
			echo $pp; 
		} 
	} 
} 

$myA = new A; 
$k = $myA->sumNumber(array(2,3,4,5,6)); 

?>
