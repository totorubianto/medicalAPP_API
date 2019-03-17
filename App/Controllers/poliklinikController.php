<?php

namespace App\Controllers;

use App\Core\Controller,
App\Models\Hospital;

class poliklinikController extends Controller {

    public function __construct() {
		$this->Hospital = new Hospital();
	}

    public function index(){
        $result=$this->Hospital->poliklinik();
        $fetch=mysqli_fetch_all($result,MYSQLI_ASSOC);
        $data=array('poliklinik' => $fetch);
        echo json_encode($data);
    }
  

}
