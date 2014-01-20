<?php
// we connect to example.com and port 3307
$link = mysql_connect('192.241.183.235:3306', 'citizex_user', 'Pa33w@rd!');
if (!$link) {
	die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);

// we connect to localhost at port 3307
/*$link = mysql_connect('127.0.0.1:3306', 'citizex_user', 'Pa33w@rd!');
if (!$link) {
	die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);

*/
?>