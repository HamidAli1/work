<?php
require_once('../core/Model.php');
require_once('../core/Database.php');
class StudentModel extends Model{

	


	public function __construct()
	{
		 
		Model::__construct();

		$this->table_name='MyGuests';
		$this->coloms_name=array( "firstname", "lastname","email","address");

	}
	

}
?>