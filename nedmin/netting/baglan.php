<?php 

try {

$db=new PDO("mysql:host=localhost;dbname=localdb;charset=utf8", 'root', '37zpto4k');
//echo "veritabanı bağlantısı başarılı";

	
} catch (PDOException $e) {

	echo $e->getMessage();;
	
}




 ?>