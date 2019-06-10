<?php

require 'models/Model_Principala.php';

	class Controller {

		public function __construct() {
			$this->model = new Model();
		}
		
		private function handle_get(){
			$nume = $this->model;
			require 'views/View_Principala.php';
		}
		
		 public function dispatch(){
        $request_method = strtolower($_SERVER["REQUEST_METHOD"]);
			$method_name = "handle_get";
			if(method_exists($this, $method_name)){
				$this->$method_name();
			}
		}


	}

?>