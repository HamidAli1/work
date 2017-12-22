<?php

require_once('../core/Controller.php');

require_once('../core/Model.php');



class CourseController extends Controller
{

	public $model_obj;
	public $params;
	public  function __construct($type){

    $this->model_obj=model::build($type);

	}
	public function getAll()
	{

		$result=$this->model_obj->selectAll($par);
       

       return $result;
	}

	public function selectAll($par)
	{

		$result=$this->model_obj->selectAll($par);
        require_once('../app/views/CourseList.php');
	}
	public function edit()
	{

		$par['cid']=$_POST['hid'];
		$result=$this->model_obj->selectAll($par);
		require_once('../app/views/EditCourse.php');
	}
	public function create()
	{
		require_once('../app/views/AddCourse.php');
	}
	public function insert()
	{

		$this->params['cname']=$_POST['fname'];
	
		$this->model_obj->insert($this->params);
		$this->selectAll();
	}
	
	public function delete()
	{
		$par['cid']=$_POST['hid'];
	    $this->model_obj->delete($par);
	    $this->selectAll();
	}

	public function update()
	{
		$this->params['cid']=$_POST['hid'];

		$this->params['firstname']=$_POST['fname'];
 		$this->params['lastname']=$_POST['lname'];
 		$this->params['email']=$_POST['email'];
 		$this->params['address']=$_POST['address'];
		
		$this->model_obj->update($this->params);
		$this->selectAll();
	}

}

?>
