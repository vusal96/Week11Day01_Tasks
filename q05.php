<?php 
	/*Asagidaki kodlar-ın outputu necə olacaq və nə üçün?*/


// 1-ci
$x = 5;
echo $x;
echo "<br />";
echo $x+++$x++;
echo "<br />";
echo $x;
echo "<br />";
echo $x---$x--;
echo "<br />";
echo $x;

echo "<br />";	

//2-ci
var_dump(0123 == 123);
var_dump('0123' == 123);
var_dump('0123' === 123);


//3-cü
$x = true and false;
var_dump($x);


//4-cü $x-in dəyəri nə olacaq?
$x = 3 + "15%" + "$25";
var_dump($x);

 ?>


 //0123 8lik sistemde oldugu ucun 123e beraber deyil ona gore de false verir
 //'0123'==123 true verir, cunki == ancaq valuenu yoxlayir ve stringi eded kimi goturur
 //'0123' ===123 false verir, cunki === value hem de type-i yoxluyur.
 //$x = 3+ "15%" + "$25" int(18) qaytarir, cunki "15%" string numberle basliyir, stringi number kimi nezere alir.