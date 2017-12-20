<?php
require_once('../core/Model.php');
require_once('../core/Database.php');
class UserModel extends Model{

	


	public function __construct()
	{
		 
		Model::__construct();


		
		$this->table_name='MyGuests';
		$this->coloms_name=array("id", "firstname", "lastname","email","reg_date");

	}
	


	
	public function update($params)
	{
			

		$sql = "UPDATE ".$this->tablename." SET firstname='".$params['firstname']."', lastname='".$params['lastname'] ."', email='".$params['email']."', reg_date='".$params['reg_date'] ."' WHERE id=".$params['id'];
 		 
		$result = $this->db->query($sql);
 		
		
	}
	public function delete($params)
	{


			 $sql_query ="DELETE FROM ".$this->tablename." WHERE id =".$params['id'] ;
   
   			 $result = $this->db->query($sql_query);
	
	}
	
}
?>