<?php
if (strpos($_SERVER['HTTP_USER_AGENT'],  'curl') !== FALSE ||
    strpos($_SERVER['HTTP_USER_AGENT'],  'Wget') !== FALSE)
{
	include 'ipinfo-console.php';
}
else
{
	include 'ipinfo-pretty.php';
}
?>
