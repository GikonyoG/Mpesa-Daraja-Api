<?php
//Mpesa Api Keys
$consumerKey = "vE4Tp8cxC5gpvIo3nS7BFOVXAERTrUF5B4wzaYfbDcTpHaAk";
$consumerSecret= "gRdX5lJqHlA2VFmDD86OVLscYhOKUBCixVj88tWuDNDUTutTj8lKKkmLXbdLeiGB";

//Access token url
$access_token_url= "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
$headers =['Content-Type:application/json; charset=utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ":" . $consumerSecret);
$result = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$result = json_decode($result);
echo $access_token = $result -> access_token;
curl_close($curl);


