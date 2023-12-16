<?php
class Users extends Model{
	public function isLogged(){
		if(isset($_SESSION['shortify']) && !empty($_SESSION['shortify'])){
			return true;
		}else{
			return false;
		}
	}

	public function login($username, $password){
		$sql = $this->db->prepare('SELECT * FROM users WHERE username = :username');
		$sql->bindValue(':username', $username);
		$sql->execute();

		if($sql->rowCount() > 0){
			$data = $sql->fetch();
			if(password_verify($password, $data['password'])){
				$_SESSION['shortify'] = $data['id'];
				return true;
			}
			return false;
		}
	}

	public function register($username, $password){

		$sql = $this->db->prepare('SELECT * FROM users WHERE username = :username');
		$sql->bindValue(':username', $username);
		$sql->execute();

		if($sql->rowCount() > 0){
			return false;
		}

		$sql = $this->db->prepare('INSERT INTO users SET username = :username, password = :password');
		$sql->bindValue(':username', $username);
		$sql->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
		$sql->execute();

		if($sql){
			$_SESSION['shortify'] = $this->db->lastInsertId();
			return true;
		}
	}

	public function edit($username = '', $password = ''){
		$sql = $this->db->prepare('SELECT * FROM users WHERE username = :username');
		$sql->bindValue(':username', $username);
		$sql->execute();

		if($sql->rowCount() > 0){
			return false;
		}

		$sql = $this->db->prepare('UPDATE users SET username = :username, password = :password WHERE id = :id');
		$sql->bindValue(':id', $_SESSION['shortify']);
		$sql->bindValue(':username', $username);
		$sql->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
		$sql->execute();

		if($sql){
			return true;
		}
	}

	public function delete($id){
		$sql = $this->db->prepare('DELETE FROM users WHERE id = :id');
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql){
			unset($_SESSION['shortify']);
			return true;
		}
	}

	public function logout(){
		unset($_SESSION['shortify']);
	}
}