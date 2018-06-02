<?php
$body = '{"user":{"phone_number_country_code":"ID","phone_number_prefix":"62","phone_number":"87714070299"}}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.streetbees.com/v2/users/signup");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: api.streetbees.com","Accept: application/json, text/plain, */*","Accept-Language: en-US,en;q=0.5","Accept-Encoding: gzip, deflate, br","Content-Type: application/json;charset=utf-8","Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImNsaWVudF9uYW1lIjoid2ViIiwic2Vzc2lvbl91aWQiOiJkYmRhODY1OWUyOTNkNGRjNjk4MzRkZWE5MmIyYmM4YjI3MGIyZmI4IiwidXNlcl9yb2xlIjoiYW5vbnltb3VzIiwiYW5vbl91c2VyX2lkIjo5NjI5MzQsInVzZXJfYW5vbnltb3VzIjp0cnVlfSwiZXhwIjoxNTI4NTE4OTUzfQ.lU64CADB-3SmuZNNJDF31cM3ezslW3Wua1FyYbJ6O5c","Client-Platform: WebApp Windows","Client-Platform-Version: 10","Client-App-Version: Firefox 56.0","Referer: https://tasks.streetbees.com/","Content-Length: 99","Origin: https://tasks.streetbees.com","Connection: keep-alive","User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$result = curl_exec($ch);
?>