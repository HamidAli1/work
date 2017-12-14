
<?php
$host    = "127.0.0.1";
$port    = 25003;

$socket = socket_create(AF_INET, SOCK_STREAM, 0) ;
$res = socket_connect($socket, $host, $port) ;
$res = socket_read ($socket, 1024);
echo "                     Reply From Server  : \n".$res."\n";
$message =readline("");
socket_write($socket, $message, strlen($message));

while($res = socket_read ($socket, 1024))
{

	echo "                     Reply From Server  : \n".$res."\n";
	$message =readline("");
	socket_write($socket, $message, strlen($message));
	
}

// close socket
socket_close($socket);
echo "Ok close";
?>
