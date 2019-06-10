<?php

require '../../models/Model_Produs.php';

	class Controller {

		public function __construct(string $num = 'Fanta') {
			$this->model = new Model($num);
		}
		
		private function handle_get(){
			$nume = $this->model;
			require '../../views/View_Produs.php';
		}
		
		 public function dispatch(){
        $request_method = strtolower($_SERVER["REQUEST_METHOD"]);
			$method_name = "handle_get";
			if(method_exists($this, $method_name)){
				$this->$method_name();
			}
		}
        
        public function modifica_nota() 
        {			
			if(isset($_POST['comanda'])) {
					if($_SESSION['categorie'] != 'Alcoolice')
						{
							if($this->model->get_stoc() == 0 ){
									echo "Nu sunt produse disponibile in stoc";
								}
							else
								$this->model->adauga_produs($_SESSION['id_comanda']);
						}
						else
								$this->interzicere();
				}
        }
        
        public function interzicere()
        {
            header('HTTP/1.1 403 Forbidden');
        }
        
        public function trateaza_403()
        {
            if(http_response_code() == "403")
            {
                echo "Nu aveti voie sa comandati bauturi alcoolice!";
            }
        }

	}

?>