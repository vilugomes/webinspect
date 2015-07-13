<?php
extract($_GET);
$count = ($count == "")?3:$count;
$host = ($host=="")?'www.google.com':$host;
$size = ($size=="")?64:$size;

$ping = `ping $host -c $count -s $size | sed "s/$/<br>/g" |awk '/time=/ { print $8 }' | cut -c6- | sed 's/$/, /g'`;
if($ping != false)
	$ping = substr($ping, 0, strlen($ping)-3);
else
	$ping = 0;
$response = array(
		"host" => $host,
		"ping" => $ping
	);
header('Content-Type: text/javascript; charset=utf8');
echo json_encode($response);	
?>