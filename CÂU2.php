<?php
//2. Viết chương trình PHP để tính tổng của các số từ 1 đến n
$sum = 0; 
function sum($sum) {
		for($x=1; $x <= 20; $x++)  
		{  
		  $sum +=$x;  
		}  
		echo "tổng là:".$sum ;
		"<br>";
   }
sum($sum)
?>