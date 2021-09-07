<?php

$ch = curl_init();

$url = "https://sayssn.atlassian.net/rest/api/2/issue/TES-2";
$login = 'sriskandarajahsayanthan@gmail.com';
$password = 'HPHa1PcAdMWvCeyknnqsE509';
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");

$resp =curl_exec($ch);

if($e = curl_error($ch)) {
    echo $e;

}
else{
    $decoded = json_decode($resp);
    print_r($decoded);
}

curl_close($ch);