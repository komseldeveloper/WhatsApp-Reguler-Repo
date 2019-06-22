<?php
	$curl = curl_init();
	
	$content = json_encode(
          array(
              "message_type" => "whatsapp",
              "nopengirim" => "62857xxxx", // Nomor Pengirim sesuai nomor yang didaftarkan di developer.komsel-ccti.com
              "notujuan" => "62857xxxx", // Untuk mengirim ke banyak nomor format penulisan adalah 62xxxx, 62xxxx
              "text" => "Halo Dunia Dari Whatsapp API", // Isi Pesan
              "type" => "single", // Single => Untuk mengirim ke satu nomor tujuan, Bulk => Untuk mengirim ke banyak nomor tujuan
              "language" => "", // Jika language kosong berarti menggunakan bahasa defult (indonesia)
              "delay"  =>  1,
              "media_path" =>  "" // Biarkan kosong ketika mengirim pesan text
          )
      );

	curl_setopt_array($curl, array(
		    CURLOPT_URL => "https://api.komsel-ccti.com/v1-messaging-api",
		    CURLOPT_RETURNTRANSFER => true,
		    CURLOPT_ENCODING => "",
		    CURLOPT_MAXREDIRS => 10,
		    CURLOPT_TIMEOUT => 30,
		    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		    CURLOPT_CUSTOMREQUEST => "POST",
		    CURLOPT_POSTFIELDS => $content,
		    CURLOPT_HTTPHEADER => array(
		       	"Authorization: Basic AuthBasicAnda",
		        "Content-Type: application/json",
		        "KOMSEL-API-KEY: TokonWhatsappAnda",
		        "cache-control: no-cache"
	    ),
	));

  	$response = curl_exec($curl);
  	$err = curl_error($curl);

  	curl_close($curl);
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }
?>