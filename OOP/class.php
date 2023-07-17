<?php

	class Student{
		public $name;
		public $age;
		public $address;
		public $grade;

		function __construct($name, $age, $address, $grade){
			$this->name = $name;
			$this->age = $age;
			$this->address = $address;
			$this->grade = $grade;
		}

		function get_name(){
			return $this->name;
		}

		function get_full_student_info(){
			return "The student name is ".$this->name." ".$this->age." years old, Lives in ".$this->address." , and is currently ".$this->grade; 
		}

	}//Student class

?>