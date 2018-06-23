<?php
$nabila = '{"phone":"+6287714070299"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.oyst.com/user-bo/v2/users/phone");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: api.oyst.com","Accept: application/json","Accept-Language: en-US,en;q=0.5","Accept-Encoding: gzip, deflate, br","content-type: application/json","origin: https://1-click.oyst.com","Referer: https://1-click.oyst.com/login/signup","Content-Length: 26","Cookie: _ga=GA1.2.1340484794.1529775196; _gid=GA1.2.1897195585.1529775196; __zlcmid=n3hRFoJ82DMK1p; session=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE4NDUxMzUzNzYsIm5iZiI6MTUyOTc3NTM3Niwic2Vzc2lvbl9pZCI6Ijg1ZDVlY2E1LTc3MGItMTFlOC1iNzQ5LTAyNDJhYzExMDAwNSJ9.UUkRjXOBaSZQLv2MG10ch71XgSqIy52zNT54b2yCxSQ","Connection: keep-alive","User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $nabila);
$result = curl_exec($ch);
?>