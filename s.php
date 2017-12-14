
<?php

$host = "127.0.0.1";
$port = 25003;
set_time_limit(0);

$socket = socket_create(AF_INET, SOCK_STREAM, 0) ;

$result = socket_bind($socket, $host, $port);

echo "         Welcome in Server\n";
while(1)
{
$result = socket_listen($socket, 3);
$ans = socket_accept($socket);
$input = socket_read($ans, 1024);
$input = trim($input);
echo "Client Message : ".$input."\n";
$output =readline("enter message from server  :  ");
socket_write($ans, $output, strlen ($output));

}
socket_close($ans);
socket_close($socket);
?>
