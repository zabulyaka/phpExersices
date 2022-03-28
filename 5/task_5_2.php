<?php  

function secret($n){
	if($n>0) return $n * secret($n-1);
	return 1;
}

//Данная фунция выполняет факториал числа n.


?>