<?php
class HomeController extends Controller{
	public function index(){
		$data = array();
		$links = new Links();

		if(isset($_POST['url']) && !empty($_POST['url'])){
			if(filter_var($_POST['url'], FILTER_VALIDATE_URL)){
				$url = $_POST['url'];
				$shortURL = substr(md5(uniqid(rand(), true)), 0, 7);

				if($links->shortenLink($url, $shortURL)){
					$data['shortURL'] = BASE_URL."/home/redirect/".$shortURL;
				}else{
					$data['error'] = 'Ocorreu um erro ao tentar encurtar o link!';
				}
			}else{
				$data['error'] = 'Por favor, informe um link válido!';
			}
		}
		$this->loadTemplate('Home', $data);
	}

	public function redirect($shortlink){
		$links = new Links();

		if($links->getOriginalLink($shortlink)){
			header("Location: ".$links->getOriginalLink($shortlink));
			exit();
		}else{
			header("Location: ".BASE_URL);
			exit();
		}
	}

	public function links(){
		$data = array();
		$links = new Links();

		
		$data['shortenedLinks'] = $links->getAllUserLink();

		$this->loadTemplate('Links', $data);
	}

	public function delete($id){
		$links = new Links();
		$links->delete($id);
		header("Location: ".BASE_URL."/home/links");
	}
}