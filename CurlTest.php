<?php
$ch = curl_init();

//curl_setopt($ch, CURLOPT_URL, 'https://www.googleapis.com/civicinfo/us_v1/elections?key=AIzaSyANj9YhpEwh6Z_AS1W0yhLyl5Lntvc_WNg');
curl_setopt($ch, CURLOPT_URL, 'http://www.yahoo.com/');
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, true);

$output = curl_exec($ch);

$error = curl_error($ch);

echo $error;

echo $output;

$info = curl_getinfo($ch);

echo $info;

curl_close($ch);

?>
