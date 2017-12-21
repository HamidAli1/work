<?php
require_once('../core/Model.php');
require_once('../core/Database.php');
class UserModel extends Model{

	


	public function __construct()
	{
		 
		Model::__construct();


		
		$this->table_name='MyGuests';
		$this->coloms_name=array( "firstname", "lastname","email","reg_date");

	}
	

}
?>