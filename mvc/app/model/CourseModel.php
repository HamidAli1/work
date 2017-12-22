<?php
require_once('../core/Model.php');
require_once('../core/Database.php');
class COurseModel extends Model{

	


	public function __construct()
	{
		 
		Model::__construct();

		$this->table_name='Courses';
		$this->coloms_name=array( "cname");

	}
	

}
?>