<?php
	/* 
		Variable yang dikirim dari KOMSEL
	 	$nomor_pengirim;
        $nomor_tujuan;
        $pesan;
        $id;
        $timestamp;
        $media_url;
        $message_type;
		
		Contoh link webhook : domainanda.com/webhook.php 
		dan pastikan link webhook anda dapat di akses oleh kami untuk mengirimkan data
	*/

	extract($_POST);

	if($pesan == "helo") {
		echo "Selamat Datang";
	} else {
		echo "YES, Webhook".$nomor_pengirim;
	}
?>