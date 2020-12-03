<?php

if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && isset($_SERVER['APPSETTING_WEBSITE_SITE_NAME'])) // Azure App Services Endpoint
	echo $_SERVER['REMOTE_ADDR'];
else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	echo $_SERVER['HTTP_X_FORWARDED_FOR'];
else
	echo $_SERVER['REMOTE_ADDR'];

?>