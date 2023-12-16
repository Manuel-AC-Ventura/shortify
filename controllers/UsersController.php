<?php
class UsersController extends Controller{
	public function index(){

	}

	public function login(){
		$data = array();
		$users = new Users();

		if(!$users->isLogged()){
			if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
				$username = addslashes($_POST['username']);
				$password = addslashes($_POST['password']);

				if($users->login($username, $password)){
					header("Location: ".BASE_URL);
					exit();
				}else{
					$data['error'] = "Usuário ou senha inválidos";
				}
			}
		}else{
			header("Location: ".BASE_URL);
		}
		$this->loadView('Login', $data);
	}

	public function register(){
		$data = array();
		$users = new Users();

		if(!$users->isLogged()){
			if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
				$username = addslashes($_POST['username']);
				$password = addslashes($_POST['password']);

				if($users->register($username, $password)){
					header("Location: ".BASE_URL);
					exit();
				}else{
					$data['error'] = "Usuário ou senha inválidos";
				}
			}
		}else{
			header("Location: ".BASE_URL);
		}
		$this->loadView('Cadastro', $data);
	}

	public function edit(){
		$data = array();
		$users = new Users();

		if($users->isLogged()){
			if(isset($_POST['username']) && !empty($_POST['username']) || isset($_POST['password']) && !empty($_POST['password']) || isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])){
				$username = addslashes($_POST['username']);
				$password = addslashes($_POST['password']);
				$confirm_password = addslashes($_POST['confirm_password']);

				if($password == $confirm_password){
					$users->edit($username, $password);
					header("Location: ".BASE_URL);
					exit();
				}else{
					$data['error'] = "As senhas devem ser iguais";
				}
			}/*else{
				$data['error'] = "Usuário ou senha inválidos";
			}*/
		}else{
			header("Location: ".BASE_URL);
		}
		$this->loadTemplate('EditUser', $data);
	}

	public function delete($id){
		$users = new Users();
		$users->delete($id);
		header("Location: ".BASE_URL);
	}

	public function logout(){
		$users = new Users();
		$users->logout();
		header("Location: ".BASE_URL);
	}
}