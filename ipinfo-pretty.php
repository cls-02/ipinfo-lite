<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo "$_SERVER[HTTP_HOST]"; ?></title>
	<link rel="stylesheet" href="ipinfo-pretty.css"/>
</head>
<body>
	<h1><?php echo "$_SERVER[HTTP_HOST]"; ?> - IP info</h1>
	<table>
	<tr>
		<td>Your IP:</td><td><?php echo "$_SERVER[REMOTE_ADDR]"; ?></td>
	</tr>
	<tr>
		<td>Your hostname:</td><td><?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']);?></td>
	</tr>
	<tr>
		<td>Your user agent:</td><td><?php echo "$_SERVER[HTTP_USER_AGENT]"; ?></td>
	</tr>
	</table>
	<footer>
		This site runs <a href="https://github.com/cls-02/ipinfo-lite">ipinfo-lite</a> - a tiny IP info webapp
	</footer>
</body>
</html>
