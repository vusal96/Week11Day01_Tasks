<?php

// yalnız b class-ından istifadə edərək ekrana necə "Əla!" sözünü yazdıra bilərəm?

class a {

     protected $b = 'Əla!';

     function b()
     {
        return $this->b;
     }
}

class b extends a {
	public function vusal(){
		echo $this->b;
	}

}
$first = new b();
$first->vusal();



 ?>
