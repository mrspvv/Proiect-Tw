<?php

require '../models/Model_Produse.php';

	class Controller {

		public function __construct(string $categ = 'Cafea') {
			$this->model = new Model($categ);
		}
		
		private function handle_get(){
			$nume = $this->model;
			require '../views/View_Produse.php';
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