<?php
class Links extends Model{
	
	public function shortenLink($url, $shortlink){
		if (isset($_SESSION['shortify'])) {
			$sql = $this->db->prepare('INSERT INTO links SET idUser = :idUser, link = :link, shortlink = :shortlink');
			$sql->bindValue(':idUser', $_SESSION['shortify']);
		} else {
			$sql = $this->db->prepare('INSERT INTO links SET link = :link, shortlink = :shortlink');
		}
	
		$sql->bindValue(':link', $url);
		$sql->bindValue(':shortlink', $shortlink);
		$sql->execute();
	
		if($sql){
			return true;
		}
	}
	
	public function getOriginalLink($shortlink){
		$sql = $this->db->prepare('SELECT * FROM links WHERE shortlink = :shortlink');
		$sql->bindValue(':shortlink', $shortlink);
		$sql->execute();

		if($sql->rowCount() > 0){
			$data = $sql->fetch();
			return $data['link'];
		}
	}

	public function getAllLinks(){
		$sql = $this->db->prepare('SELECT * FROM links WHERE idUser = :id');
		$sql->bindValue(':id', $_SESSION['shortify']);
		$sql->execute();

		if($sql->rowCount() > 0){
			$data = $sql->fetchAll();
			return $data;
		}
	}

	public function getAllUserLink(){
		$sql = $this->db->prepare('SELECT * FROM links WHERE idUser = :id');
		$sql->bindValue(':id', $_SESSION['shortify']);
		$sql->execute();

		if($sql->rowCount() > 0){
			$data = $sql->fetchAll();
			return $data;
		}
	}

	public function getLink($id){
		$sql = $this->db->prepare('SELECT * FROM links WHERE id = :id AND idUser = :idUser');
		$sql->bindValue(':id', $id);
		$sql->bindValue(':idUser', $_SESSION['shortify']);
		$sql->execute();
		
		if($sql->rowCount() > 0){
			$data = $sql->fetch();
			return $data;
		}
	}

	public function delete($id){
		$sql = $this->db->prepare('DELETE FROM links WHERE id = :id AND idUser = :idUser');
		$sql->bindValue(':id', $id);
		$sql->bindValue(':idUser', $_SESSION['shortify']);
		$sql->execute();

		if($sql){
			return true;
		}
	}
}