<?php 

	/*
		ekranaYaz(); 								-->Boş
		ekranaYaz('salam'); 						-->arg1: salam
		ekranaYaz('salam', 'heci', 'necesen');		-->arg1: salam,arg2: heci,arg3: necesen
	*/

	


		
			
			function ekranaYaz($args = array()){
				foreach ($args as $value) {
            		echo $value." ";
        		}
			}

			ekranaYaz(array(1 , 3));



?>