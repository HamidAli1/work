<?php
class App
{

function __construct()
{
 echo "app constructor called";

 $this->manage_url();

}

function manage_url()
{
$uri = $_GET['url'];
//$uri="/mvc/public/user/t eache?r/";

echo "your uri is ".$uri." \n";




$pieces = explode("/",trim(filter_var( $uri ,FILTER_SANITIZE_URL)));

//print_r ($pieces);



}



}

?>
