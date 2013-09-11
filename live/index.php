<?php
	/* v0.1
	Author: Fed
	Simple device-aware redirection...
	*/
	$user_agent = empty($_SERVER['HTTP_USER_AGENT'])?'':$_SERVER['HTTP_USER_AGENT'];
	$mobile_agent = '/(iPad|iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/';
	if( preg_match($mobile_agent, $user_agent) ){
		$url = "https://example.com/app_name/";
	}
	else{
		$url = "https://apps.facebook.com/app_name/";
	}
	header("Location: $url"); exit();