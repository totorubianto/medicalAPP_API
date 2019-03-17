<?php  

namespace App\Core;

use mysqli;

class Model {

	public $db;

	public function __construct() {
		global $config;
		$this->db = new mysqli($config['host'],$config['dbuser'],$config['password'],$config['dbname']);
	}
}

// Jika Pake Pdo

// use PDO;

// class Model {

//     protected $db;

//     public function __construct() {
//         global $config;
//         $option = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"];
//         $this->db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass'], $option);
//         $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//     }

// }
