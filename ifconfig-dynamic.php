<?php
if (strpos($_SERVER['HTTP_USER_AGENT'],  'curl') !== FALSE
	|| strpos($_SERVER['HTTP_USER_AGENT'],  'wget') !== FALSE)
{
	echo "$_SERVER[REMOTE_ADDR]";
}
else
{
	include 'ifconfig.php';
}
