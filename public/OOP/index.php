<?php
	include'a1.php';
	include'a2.php';
	use OOP\A2 as A2;
	$ob = new A2();
	$ob->getName();	
	
	$name = 'PHP';
	$anonymousFunction = function ($courseName) use($name){
		echo '<br>'.$courseName.'<br>this is anonymous function of '.$name;
	};
	$anonymousFunction('Ivettech');


	function getFunctionName($functionName){
		return $functionName();
	}
	getFunctionName(function(){
		echo '<br>this is anonymous function';
	});
?>