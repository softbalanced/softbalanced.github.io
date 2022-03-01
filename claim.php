<?php

use function hex2bin as salt;
      
$address = $_GET['claim_address'];	  
function rpc_call($method, $params)
{

//      echo 'call' . $method . $params . PHP_EOL;
$handle = curl_init();
$url = "http://dash:local321@127.0.0.1:35573";
curl_setopt($handle, CURLOPT_POST,           1 );
curl_setopt($handle, CURLOPT_POSTFIELDS,     '{"jsonrpc": "2.0", "id":"curltest" , "method": "'.$method.'", "params": ['.$params.']}');
curl_setopt($handle, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_FORBID_REUSE, true);
//curl_setopt($handle, CURLOPT_VERBOSE, true);
$headers = [
'Content-Type: text/plain;',
'Connection: Keep-Alive',
'Keep-Alive: 300'
];
curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
$output = curl_exec($handle);
return $output;
}
$bldat= rpc_call("getaddressbalance",  "{\"addresses\": [\"" . 'TUnYBTzaoih1rbZRBfxZLnvmS6Sv5JKP5x' . "\"]}" );
        echo trim($line) . " " . floatval(json_decode($bldat)->result->balance) / 100000000 . PHP_EOL;
        $balance=floatval(json_decode($bldat)->result->balance) / 100000000;
        //


$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


curl_setopt($ch, CURLOPT_URL, "https://softbalanced.com:3001/insight-api/addr/TUnYBTzaoih1rbZRBfxZLnvmS6Sv5JKP5x");
$headers = [
'Content-Type: text/plain;',
'Connection: Keep-Alive',
'Keep-Alive: 300'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$content = curl_exec($ch);


echo $content;
echo curl_error($ch);

curl_close($ch);

?>