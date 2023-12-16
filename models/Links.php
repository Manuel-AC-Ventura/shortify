<?php
class Links extends Model{
	
	public function shortenLink($url){
		$sql = $this->db->prepare('INSERT INTO links SET idUser = :id, url = :url ,shortlink = :shortlink');
		$sql->bindValue(':id', $_SESSION['shortify']);
		$sql->bindValue(':url', $url);
		$sql->bindValue(':shortlink', substr(md5(uniqid(mt_rand(), true)), 0, 6));
		$sql->execute();
	}

	public function getAllLinks(){
		$sql = $this->db->prepare('SELECT * FROM links WHERE idUser = :id');
		$sql->bindValue(':id', $_SESSION['shortify']);
		$sql->execute();
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