<?php
	class Account {
		
		public $name;
		public $surname;
		
		public function __construct($name, $surname) {
			$this->name = $name;
			$this->surname = $surname;
		}
	}
?>