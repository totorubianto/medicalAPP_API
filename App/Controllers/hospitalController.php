<?php

namespace App\Controllers;

use App\Core\Controller,
App\Models\Hospital;

class hospitalController extends Controller {

    public function __construct() {
		$this->Hospital = new Hospital();
	}

	public function index(){
        $result=$this->Hospital->hospital();
        $fetch=mysqli_fetch_all($result,MYSQLI_ASSOC);
        $data=array('hospital' => $fetch);
        echo json_encode($data);
    }
 

}
