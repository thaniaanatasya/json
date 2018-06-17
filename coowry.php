<?php
$body = '{"msisdn":"+6287714070299"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.coowry.com/api/tokens");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: www.coowry.com","Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8","Accept-Language: en-US,en;q=0.5","Accept-Encoding: gzip, deflate, br","Content-Type: application/json","Referer: https://www.coowry.com/signin","Content-Length: 27","Connection: keep-alive","User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:50.0) Gecko/20100101 Firefox/50.0"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$result = curl_exec($ch);
?>