<?php
ob_start();
session_start();

include 'baglan.php';

if (isset($_POST['kgiris'])) {
	$name=$_POST['name'];
	$sifre=md5($_POST['sifre']);

	$kullanicisor=$db->prepare("SELECT * FROM oyuncular where name=:name and sifre=:sifre");
	$kullanicisor->execute(array(
		'name' => $name,
		'sifre' => $sifre,
	));

	echo $say=$kullanicisor->rowCount();

	if ($say==1) {

		$_SESSION['name']=$name;
		header("Location:../index.php");
		exit;



	} else {

		header("Location:../giris.php?durum=no");
		exit;
	}
	

}






if (isset($_POST['genelayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_title=:ayar_title,
		ayar_description=:ayar_description,
		ayar_keywords=:ayar_keywords,
		ayar_author=:ayar_author
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_title' => $_POST['ayar_title'],
		'ayar_description' => $_POST['ayar_description'],
		'ayar_keywords' => $_POST['ayar_keywords'],
		'ayar_author' => $_POST['ayar_author']
	));


	if ($update) {

		header("Location:../production/genel-ayar.php?durum=ok");

	} else {

		header("Location:../production/genel-ayar.php?durum=no");
	}
	
}



if (isset($_POST['iletisimayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_tel=:ayar_tel,
		ayar_gsm=:ayar_gsm,
		ayar_faks=:ayar_faks,
		ayar_mail=:ayar_mail,
		ayar_ilce=:ayar_ilce,
		ayar_il=:ayar_il,
		ayar_adres=:ayar_adres,
		ayar_mesai=:ayar_mesai
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_tel' => $_POST['ayar_tel'],
		'ayar_gsm' => $_POST['ayar_gsm'],
		'ayar_faks' => $_POST['ayar_faks'],
		'ayar_mail' => $_POST['ayar_mail'],
		'ayar_ilce' => $_POST['ayar_ilce'],
		'ayar_il' => $_POST['ayar_il'],
		'ayar_adres' => $_POST['ayar_adres'],
		'ayar_mesai' => $_POST['ayar_mesai']
	));


	if ($update) {

		header("Location:../production/iletisim-ayarlar.php?durum=ok");

	} else {

		header("Location:../production/iletisim-ayarlar.php?durum=no");
	}
	
}


if (isset($_POST['apiayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		
		ayar_analystic=:ayar_analystic,
		ayar_maps=:ayar_maps,
		ayar_zopim=:ayar_zopim
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(

		'ayar_analystic' => $_POST['ayar_analystic'],
		'ayar_maps' => $_POST['ayar_maps'],
		'ayar_zopim' => $_POST['ayar_zopim']
	));


	if ($update) {

		header("Location:../production/api-ayarlar.php?durum=ok");

	} else {

		header("Location:../production/api-ayarlar.php?durum=no");
	}
	
}


if (isset($_POST['hakkimizdakaydet'])) {
	
	//Tablo güncelleme işlemi kodları...

	/*

	copy paste işlemlerinde tablo ve işaretli satır isminin değiştirildiğinden emin olun!!!

	*/
	$ayarkaydet=$db->prepare("UPDATE hakkimizda SET
		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_icerik=:hakkimizda_icerik,
		hakkimizda_video=:hakkimizda_video,
		hakkimizda_vizyon=:hakkimizda_vizyon,
		hakkimizda_misyon=:hakkimizda_misyon
		WHERE hakkimizda_id=0");

	$update=$ayarkaydet->execute(array(
		'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
		'hakkimizda_icerik' => $_POST['hakkimizda_icerik'],
		'hakkimizda_video' => $_POST['hakkimizda_video'],
		'hakkimizda_vizyon' => $_POST['hakkimizda_vizyon'],
		'hakkimizda_misyon' => $_POST['hakkimizda_misyon']
	));


	if ($update) {

		header("Location:../production/hakkimizda.php?durum=ok");

	} else {

		header("Location:../production/hakkimizda.php?durum=no");
	}
	
}



if (isset($_POST['kullaniciduzenle'])) {
	
	$id=$_POST['id'];

	$ayarkaydet=$db->prepare("UPDATE oyuncular SET
		name=:name,
		para=:para,
		sifre=:sifre,
		skorz=:skorz
		WHERE id={?_POST['id']}");

	$update=$ayarkaydet->execute(array(
		'name' => $_POST['name'],
		'para' => $_POST['para'],
		'sifre' => $_POST['sifre'],
		'skorz' => $_POST['skorz']
	));


	if ($update) {

		header("Location:oyuncu-duzenle.php?id=$id&durum=ok");

	} else {

		header("Location:oyuncu-duzenle.php?id=$id&durum=no");
	}
	
}




if ($_GET['usersil']=="ok") {

	$sil=$db->prepare("DELETE from oyuncular where id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['user_id']
	));


	if ($kontrol) {


		header("location:../user.php?sil=ok");


	} else {

		header("location:../user.php?sil=no");

	}


}




if ($_GET['evsil']=="ok") {	
	$sil=$db->prepare("DELETE from evler where id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['ev_id']
	));

	if ($kontrol) {


		Header("Location:../evlerim.php?durum=ok");

	} else {

		Header("Location:../evlerim.php?durum=no");
	}

}





if ($_GET['aracsil']=="ok") {	
	$sil=$db->prepare("DELETE from araclar where id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['aracid_id']
	));

	if ($kontrol) {


		Header("Location:../araclarim.php?durum=ok");

	} else {

		Header("Location:../araclarim.php?durum=no");
	}

}






if (isset($_POST['userduzenle'])) {	
	$id=$_POST['id'];
	$ayarkaydet=$db->prepare("UPDATE oyuncular SET
		skorz=:skorz,
		para=:para,
		bankpara=:bankpara,
		rehber=:rehber,
		ulvl=:ulvl
		WHERE id={$_POST['id']}");

	$update=$ayarkaydet->execute(array(
		'skorz' => $_POST['skorz'],
		'para' => $_POST['para'],
		'bankpara' => $_POST['bankpara'],
		'rehber' => $_POST['rehber'],
		'ulvl' => $_POST['ulvl']
	));


	if ($update) {

		header("Location:../userduzenle.php?user_id=$id&durum=ok");

	} else {

		header("Location:../userduzenle.php?user_id=$id&durum=no");
	}
	
}







if (isset($_POST['evhediye'])) {
	$owner=$_POST['id'];
	$ayarekle=$db->prepare("INSERT INTO evler SET
		
		owner=:owner
		");
	$insert=$ayarekle->execute(array(
	
		'owner' => $owner
	));
	if ($insert) {
		Header("Location:../hediye.php?durum=ok&user_id=$owner");
	} else {
		Header("Location:../hediye.php?durum=no&user_id=$owner");
	}

}



if (isset($_POST['arachediye'])) {
	$owner=$_POST['id'];
	$ayarekle=$db->prepare("INSERT INTO araclar SET
		
		owner=:owner
		");
	$insert=$ayarekle->execute(array(
	
		'owner' => $owner
	));
	if ($insert) {
		Header("Location:../hediye.php?durum=ok&user_id=$owner");
	} else {
		Header("Location:../hediye.php?durum=no&user_id=$owner");
	}

}










?>