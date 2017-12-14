
<?php

$host = "127.0.0.1";
$port = 25003;
set_time_limit(0);
$socket = socket_create(AF_INET, SOCK_STREAM, 0) ;
$result = socket_bind($socket, $host, $port);

echo "         Welcome in Server\n";
$result = socket_listen($socket, 3);
$ans = socket_accept($socket);
$output ="Please select one option \n"."1-To send the Messages\n"."2-To make Duplication \n";
socket_write($ans, $output, strlen ($output));
$input = socket_read($ans, 1024);
$input = trim($input);
	if($input==1)
	{
		$output ="Please type your message \n";
		socket_write($ans, $output, strlen ($output));
		$input = socket_read($ans, 1024);
		$input = trim($input);
		echo "your message was  : ".$input."  \n";
	}
	elseif($input==2)
	{
    		$output ="Please give the source path for duplication \n";
   		socket_write($ans, $output, strlen ($output));
		$putter=1;
		while($k = socket_read($ans, 1024)) 
		{
  			echo $k."\n";
			if($putter==1)
			{
				$path1=$k;
        			$putter=2;
	
			}
			elseif($putter==2)
			{
				$path2=$k;
	 			mycopy($path1,$path2);
				socket_close($ans);
				break;
			}
  		 $output ="Please give the destination path for duplication \n";
 		 socket_write($ans, $output, strlen ($output));
		}
	}


socket_close($ans);
socket_close($socket);
function mycopy($s1,$s2) {
	
echo "source  ".$s1."\n";
echo "destination  ".$s2."\n";
$path = pathinfo($s2);
    if (!file_exists($path['dirname'])) 
    {
        mkdir($path['dirname'], 0777, true);
    }
    if (!copy($s1,$s2))
    {
        echo "copy failed \n";
    }

}

?>
