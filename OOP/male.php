<?php
	include_once("class.php");

	class Male extends Student{
		public $color = "blue";

		function get_uniform_color(){
			return $this->name."'s uniform color is ".$this->color;
		}

	}//class Male

?>