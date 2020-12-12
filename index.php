<?php

// Azure App Services Endpoint
if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && isset($_ENV['APPSETTING_WEBSITE_SITE_NAME'])) {
	if(isset($_SERVER['HTTP_X_CLIENT_IP'])) {
		echo $_SERVER['HTTP_X_CLIENT_IP'];
	} else {
		echo $_SERVER['REMOTE_ADDR'];
	}
}
else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	echo $_SERVER['HTTP_X_FORWARDED_FOR'];
else
	echo $_SERVER['REMOTE_ADDR'];

?>