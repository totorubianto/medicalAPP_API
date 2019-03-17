<?php

namespace App\Models;

use App\Core\Model;

class Hospital extends Model {

	public function getAll() {
		$sql = "SELECT * FROM t_poliklinik JOIN t_hospital  ON t_hospital.id_hospital = t_poliklinik.id_hospital";
		$result = $this->db->query($sql);
		return $result;
	}
	public function delete($id){
		$sql = "DELETE FROM pengelola WHERE id=$id"; 
		$result = $this->db->query($sql);
		header('Location: ' .BASE. '/admin/view');
	}
	public function update($id,$username,$password){
		$sql = "UPDATE pengelola SET username='$username',password='$password' WHERE id=$id";
		$result = $this->db->query($sql);
		header('Location: ' .BASE. 'user');
	}
	public function add($username,$password,$name){
		$sql ="INSERT INTO pengelola (username, password, gambar) VALUES ('$username','$password','$name')";
		$result = $this->db->query($sql);
header('Location: ' .BASE. 'index');
	}
	public function selectupdate($id){
		$sql = "SELECT * FROM pengelola WHERE id=$id";
		$result = $this->db->query($sql);
		return $result;
	}


}
