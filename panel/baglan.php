<?php 




try {

	$db=new PDO("mysql:host=127.0.0.1;dbname=ayyildiz;charset=utf8",'root','13041987');
	//echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}





 ?>