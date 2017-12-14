
<?php
$host    = "127.0.0.1";
$port    = 25003;

//to check the differance
while(1)
{


$message =readline("         enter your message \n");
$socket = socket_create(AF_INET, SOCK_STREAM, 0) ;
$res = socket_connect($socket, $host, $port) ;  
socket_write($socket, $message, strlen($message));
$res = socket_read ($socket, 1024);
echo "Reply From Server  :".$res."\n";


}



// close socket
socket_close($socket);




?>
