<?php

/** 
 * @author paul.stenbjorn
 * 
 */
class connectmySql {

	/**
	 * 
	 */
	function __construct() {
		$link = mysql_connect('192.241.183.235:3306', 'citizex_user', 'Pa33w@rd!');
		if (!$link) {
			die('Could not connect: ' . mysql_error());
		}
		//echo 'Connected successfully';
	}
}

?>