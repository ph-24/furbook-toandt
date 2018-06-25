<?php
	namespace OOP;
	class A2 extends \OOP\A1 {
		public function getName(){
			parent::getName();
			echo '<br>class A2';
		}
	}
?>