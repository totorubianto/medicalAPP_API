<?php

namespace App\Models;

use App\Core\Model;

class Hospital extends Model {
    
    
    //Hospital ======================================
    public function hospital() {
        $sql = "SELECT * FROM t_hospital";
        $result = $this->db->query($sql);
        return $result;
    }
    //Poliklinik ====================================
    public function poliklinik() {
        $sql = "SELECT * FROM t_poliklinik";
        $result = $this->db->query($sql);
        return $result;
    }
    //Docter ====================================
    public function docter() {
        $sql = "SELECT * FROM t_docter";
        $result = $this->db->query($sql);
        return $result;
    }
    //Tak Guna ======================================
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
