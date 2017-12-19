<?php

//require_once('../../core/controller.php');

require_once('../../mvc/core/Model.php');


class UserController
{

	public $model_obj;

	public  function __construct($type){

//echo $type;

  		
	
//echo "now  this ".$type;


    $this->model_obj=model::build($type);


}

public function index()
{
	
}

public function create_user()
{
	
}

public function delete_user()
{
	
}

public function update_user()
{
	
}

}

?>
