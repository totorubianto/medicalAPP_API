<?php

namespace App\Controllers;

use App\Core\Controller,
App\Models\Hospital;

class doctorController extends Controller {

    public function __construct() {
		$this->Hospital = new Hospital();
	}

    public function index(){
        $result=$this->Hospital->doctor();
        $fetch=mysqli_fetch_all($result,MYSQLI_ASSOC);
        $data=array('poliklinik' => $fetch);
        echo json_encode($data);
    }
    public function bypoliklinik($id){
        $result=$this->Hospital->bypoliklinik($id);
        $fetch=mysqli_fetch_all($result,MYSQLI_ASSOC);
        $data=array('poliklinik' => $fetch);
        echo json_encode($data);
    }
    public function byiddoctor($id){
        $result=$this->Hospital->byid($id);
        $fetch=mysqli_fetch_all($result,MYSQLI_ASSOC);
        $data=array('poliklinik' => $fetch);
        echo json_encode($data);
    }
  

}
