# Custom MVC Sederhana Dengan Autoload PSR4

Bagi yang mengimplementasikan OOP ketika koding PHP, pasti tidak asing dengan implementasi pemanggilan class di file yang berbeda. Biasanya file yang berisi class tersebut dipanggil menggunakan require atau include. Suatu hal yang tidak efisien ialah ketika akan akan menggunakan banyak class, programmer membuat setiap class dalam satu file tersendiri dan jika akan menggunakannya programmer meng-include-kan satu per satu file class pada permulaan baris kode. Ini bukan masalah jika hanya melakukan include satu, dua atau lima file, tapi jika puluhan? ratusan bahkan lebih?. Dengan Autoload PSR4 akan mempermudah programer dalam pemanggilan class 

## Instalasi Autoload PSR4

1. lakukan composer update pada directory
2. Buang tanda komentar di index.php

```
require './vendor/autoload.php';
```
3. Cari kode dibawah dan di kasih komentar

```
define("PROJECTPATH", dirname(__DIR__) . '/latihanMVC');

function autoload_classes($class_name)
{
	$filename = PROJECTPATH . '/' . str_replace('\\', '/', $class_name) .'.php';

	if(is_file($filename))
	{
		include_once $filename;
	}
}

spl_autoload_register('autoload_classes');
```

### Konfigurasi Database & Project Path

Konfigurasi Database & Project Path terdapat pada file config.php

```
define("BASE","http://localhost:8888/latihanMVC");
define("BASEADMIN", BASE. "admin");
define("BASEDIR", __DIR__ . '/');


$config['dbname']= 'lks';
$config['host']= 'localhost';
$config['password']= 'root';
$config['dbuser']= 'root';
```

### Jika Memakai Pdo

1. Hapus komentar pada App/Core/Model  

```
use PDO;

class Model {

    protected $db;

    public function __construct() {
        global $config;
        $option = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"];
        $this->db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass'], $option);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

}
```
2. Beri komentar pada 

```
use mysqli;

class Model {

	private $db;

	public function __construct() {
		global $config;
		$this->db = new mysqli($config['host'],$config['dbuser'],$config['password'],$config['dbname']);
	}
}
```
