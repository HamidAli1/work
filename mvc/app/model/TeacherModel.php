<?php
require_once('../core/Model.php');
require_once('../core/Database.php');
class TeacherModel extends Model{

	


	public function __construct()
	{
		 

		Model::__construct();


		
		$this->table_name='Teachers';
		$this->coloms_name=array( "firstname", "lastname","email","address");

	}
	

}
?>