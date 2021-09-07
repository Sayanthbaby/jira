<?php


$url = "https://sayssn.atlassian.net/rest/api/2/issue/";
$login = 'sriskandarajahsayanthan@gmail.com';
$password = 'SPrOaaSpllmlpLyGdxp75712';
$txt = '{
    "fields": {
        "project": {
            "key": "TES"
        },
        "summary": "SUMMARY",
        "description": "DESCRIPTION",
        "issuetype": {
            "name": "Task"
        }
    }
}';


$ch = curl_init ();


curl_setopt ( $ch, CURLOPT_URL, $url );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt ( $ch, CURLOPT_POSTFIELDS, $txt );
curl_setopt ( $ch, CURLOPT_POST, 1 );
curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");

$headers = array ();
$headers [] = "Content-Type: application/json";
curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );


$result = curl_exec ( $ch );

echo $result;