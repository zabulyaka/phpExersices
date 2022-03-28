<?php 

function foo(){
	function bar(){
		echo 'Hello world';
	}
} bar();

function foo(){
	function bar(){
		echo 'Hello world';
	}
}

foo();
bar();

//Будет выполняться второй скрипт. Первый пытается вызвать функцию вне области видимости.

?>