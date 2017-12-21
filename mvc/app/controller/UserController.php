<?php

require_once('../core/Controller.php');

require_once('../core/Model.php');



class UserController extends Controller
{

	public $model_obj;
	public $params;
	public  function __construct($type){

		
			
    	$this->model_obj=model::build($type);

	}

	public function selectAll($params)
	{

		$result=$this->model_obj->selectAll($params);
       
		require_once('../app/views/show.php');
		

		
    	

	}
	public function edit($params)
	{
		$result=$this->model_obj->selectAll($params);
			require_once('../app/views/edit.php');
	}
	public function create()
	{
			require_once('../app/views/create.php');
	}
	public function insert()
	{


		$this->params['firstname']=$_POST['fname'];
 		$this->params['lastname']=$_POST['lname'];
 		$this->params['email']=$_POST['email'];
 		$this->params['reg_date']=$_POST['reg_date'];
	

		$this->model_obj->insert($this->params);
	}
	
	public function delete($params)
	{
	$this->model_obj->delete($params);
	}

	public function update()
	{
		$this->params['id']=$_POST['hid'];
		$this->params['firstname']=$_POST['fname'];
 		$this->params['lastname']=$_POST['lname'];
 		$this->params['email']=$_POST['email'];
 		$this->params['reg_date']=$_POST['reg_date'];
		
		$this->model_obj->update($this->params);
	}

}

if(isset($_POST['good'])){ // button name


		
 		
 }




?>
