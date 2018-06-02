<?php
$body = '{"Login":"6287714970299","SendPassword":true,"CultureId":"ru-RU","ProfileItems":[{"TypeId":"Title","Value":"6287714970299"}]}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.walletone.com/OpenApi/Registration/users");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: www.walletone.com","Accept: application/vnd.wallet.openapi.v1+json","Accept-Language: ru-RU","Accept-Encoding: gzip, deflate, br","Content-Type: application/vnd.wallet.openapi.v1+json","Authorization: Bearer 992E98CD-8346-4898-B51B-33CF3C839CD7","Referer: https://www.walletone.com/wallet/client/","Content-Length: 125","Cookie: _ga=GA1.2.372296575.1527913771; _gid=GA1.2.1508498556.1527913771; _ym_uid=1527913771991332008; _ym_visorc_24181150=w; w1_current_language=ru; _ym_isad=2","Connection: keep-alive","User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$result = curl_exec($ch);
?>