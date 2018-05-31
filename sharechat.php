<?php
$body = '{"name":"Sharechat User","gender":"M","adult":"0","signUpMode":"web","appVersion":140,"language":"Rajasthani","phone":"6287714070299","countryAreaCode":"62"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://restapi1.sharechat.com/signUp");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: restapi1.sharechat.com","Accept: application/json","Accept-Language: en","Accept-Encoding: gzip, deflate, br","Content-Length: 157","Content-Type: application/json","Referer: https://sharechat.com/signin","origin: https://sharechat.com","Connection: keep-alive","User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$result = curl_exec($ch);
?>