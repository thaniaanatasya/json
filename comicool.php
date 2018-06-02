<?php
$body = '{"country_code":"+62","nonce":"68jm13eiw7b","phone_num":"87714070299","timestamp":1527949165,"sign":"67d84e2fb60d61ddfbf1cd8ac7b9f9e3"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.comicool.cn/smscode/send");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: api.comicool.cn","Accept: application/json, text/plain, */*","Accept-Language: en-US,en;q=0.5","Accept-Encoding: gzip, deflate, br","Content-Type: application/json;charset=utf-8","Referer: https://m.comicool.cn/register/?act=reg","Content-Length: 135","Origin: https://m.comicool.cn","Connection: keep-alive","User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$result = curl_exec($ch);
?>