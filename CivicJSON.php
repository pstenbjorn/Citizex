<?php
$data = array(
		"address" => "6905 Quander Rd. Alexandria VA 22307"
);

$json_data = json_encode($data);

//echo $json_data;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.googleapis.com/civicinfo/us_v1/voterinfo/4015/lookup?key=AIzaSyANj9YhpEwh6Z_AS1W0yhLyl5Lntvc_WNg');
//curl_setopt($ch, CURLOPT_URL, 'http://www.mindmixer.com');
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//curl_exec($ch);

$output = curl_exec($ch);
$error = curl_error($ch);
$result = json_decode($output);

$info = curl_getinfo($ch);
echo $output;
echo $result;
//echo $error;
//echo $info;

curl_close($ch);

?>