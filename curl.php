<?php
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'http://sinhvienit.net');
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: text/html','charset:UTF-8'));
	curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	curl_setopt($curl, CURLOPT_REFERER, 'http://google.com');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	$data = curl_exec($curl);
	curl_close($curl);
	echo $data;
	var_dump($data);
?>