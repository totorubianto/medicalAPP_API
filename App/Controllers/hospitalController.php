<?php

namespace App\Controllers;

use App\Core\Controller,
App\Models\Hospital;

class hospitalController extends Controller {

    public function __construct() {
		$this->Hospital = new Hospital();
	}

	public function index(){
        $result=$this->Hospital->getAll();
        $fetch=mysqli_fetch_all($result,MYSQLI_ASSOC);
        $data=array('result' => $fetch);
        echo json_encode($data);
    }
  

}
