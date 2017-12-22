<?php
class App
{

	public $controller_name;
  	public $function_name;
  	public $uri;
  	public $params;
	function __construct()
	{
		
		$pieces=$this->manage_url();
 		$saver= ucfirst ($pieces[0]);
		require_once('Controller.php');		
		$this->controller_name=Controller::build($saver);
 		$this->function_name=$pieces[1];
		call_user_func_array(array($this->controller_name,	$this->function_name),array($this->params));
		;
	}

	function manage_url()
	{
		
		$this->uri = $_GET['url'];
		parse_str($_SERVER["QUERY_STRING"], $this->params); 		
 		unset($this->params['url']);		
		return $pieces = explode("/",trim(filter_var( $this->uri ,FILTER_SANITIZE_URL)));
	}

}

