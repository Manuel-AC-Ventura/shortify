<?php
class HomeController extends Controller{
	public function index(){
		$data = array();
		$links = new Links();

		if(isset($_POST['url']) && !empty($_POST['url'])){
			$url = $_POST['url'];
			if(filter_var($url, FILTER_VALIDATE_URL)){
				if($links->shortenLink($url)){
					
				}else{
					$data['error'] = 'Ocorreu um erro ao tentar encurtar o link!';
				}
			}else{
				$data['error'] = 'Por favor, informe um link válido!';
			}
		}
		$this->loadTemplate('Home', $data);
	}

	public function links(){
		$data = array();
		$links = new Links();

		$this->loadTemplate('Links', $data);
	}
}