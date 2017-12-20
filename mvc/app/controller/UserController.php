<?php

require_once('../core/Controller.php');

require_once('../../mvc/core/Model.php');


class UserController extends Controller
{

	public $model_obj;

	public  function __construct($type){

		
			
    	$this->model_obj=model::build($type);

	}

	public function selectAll($params)
	{


			
		$result=$this->model_obj->selectAll($params);
    		

		if ($result->num_rows > 0) {
   		 
    	while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} 
	}

	public function create($params)
	{
	
	}
	public function insert($params)
	{
		echo "dfvxd";
		die();
		$this->model_obj->insert($params);
	}
	
	public function delete($params)
	{
	$this->model_obj->delete($params);
	}

	public function update($params)
	{
		
	$this->model_obj->update($params);
	}

}

?>
