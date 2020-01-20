<?php
final class router 
	{
		public function __construct()
		{
			$this->method = $_SERVER["REQUEST_METHOD"];
			/*
			switch ($this->method) {
				case 'GET':
					# code...
					break;

				case 'POST':
					# code...
					break;

				case 'PUT':
					# code...
					break;
				default:
					echo "Metodo não reconhecido";
					break;
			};
			*/
			if ($this->method == "GET")
			{
				$this->GET();
			} else 
			{
				$this->POST();
			}
		}
		public function GET()
		{	
			$arg = explode("/", $_SERVER["REQUEST_URI"]);
			include("routes/get/".$arg[1].".php");
		}
		public function POST()
		{
			echo "foi POST";
		}		
	}
?>