<?php
	/* v0.1
	Author: Fed
	Simple device-aware redirection...
	*/
	$mobile_agent = '/(iPad|iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/';
	if( preg_match($mobile_agent, $_SERVER['HTTP_USER_AGENT']) ){
		$url = "https://example.com/app_name/";
	}
	else{
		$url = "https://apps.facebook.com/app_name/";
	}
	header("Location: $url"); exit();