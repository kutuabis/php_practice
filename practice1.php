<?php 
class A 
{ 
	private $getText; 
	private $myGetText; 

	public function b($be) 
	{ 
		$getText = explode(" ",$be); 
		$this->printText($getText); 
	} 

	public function printText($k) 
	{ 
		foreach($k as $myGetText) 
		{ 
			echo $myGetText. "<br>"; 
		} 
	} 
} 

$myA = new A; 
$c = $myA->b("cake nuts grandma"); 

?>
