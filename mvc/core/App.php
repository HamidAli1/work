<?php
class App
{

	public $controller_name;
  	public $function_name;
  	public $uri;
  	public $pieces = array();

	function __construct()
	{

		$this->manage_url();

 		$saver= ucfirst ($this->pieces[0]);


		require_once('Controller.php');	
		

 		$this->controller_name=Controller::build($saver);

	

 		$this->function_name=$this->pieces[1];
	

		$params="abc";
		call_user_func_array(array($this->controller_name,	$this->function_name),array($params));
	}

	function manage_url()
	{
		$this->uri = $_GET['url'];
		$this->pieces = explode("/",trim(filter_var( $this->uri ,FILTER_SANITIZE_URL)));
	}

}

