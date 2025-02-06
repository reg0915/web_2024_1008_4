<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


header('Access-Control-Allow-Origin: *');
$ch = curl_init();

$url = 'https://data.moenv.gov.tw/api/v2/gp_p_01?api_key=58d6040c-dca7-407f-a244-d0bfdfa8144a&limit=1000&sort=ImportDate%20desc&format=JSON';
//curl_setopt可以設定curl參數
//設定url
curl_setopt($ch , CURLOPT_URL , $url);
// false顯示
// true不顯示
curl_setopt($ch, , true);
$result = curl_exec($ch);
echo $result;

// $result = curl_exec($ch);
//關閉連線
curl_close($ch);