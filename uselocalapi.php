<?php
$data = array(
		"controller" => "get_election",
		"action"=> "read",
		"election_id"=>"1",
		"election_date"=>"11/07/2014",
		"election_title"=>"General 2014",
		"jurisdiction"=>"Alexandria City"
);

$json_data = json_encode($data);

//echo $json_data;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://192.241.183.235/ps_api/?');
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