<?php

require '../models/Model_Cont.php';

	class Controller {

		public function __construct(string $num) {
			$this->model = new Model($num);
		}
		
		private function handle_get(){
			$nume = $this->model;
			require '../views/View_Cont.php';
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