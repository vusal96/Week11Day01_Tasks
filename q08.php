<?php 
//1.Ededin faktorialini hesablayan Class yazin//


class Faktorial{

	public function fak($a){

		$b = 1;
		for ($i=1; $i <= $a; $i++) { 
			$b = $b * $i;
		}
		echo $b;
	}
}

Faktorial::fak(6);


 ?>