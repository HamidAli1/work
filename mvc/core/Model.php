<?php 
require_once('Database.php');

class Model
{

    public $db;
    public $table_name;
    public $colums_name;
 public function __construct()
{
   
    $this->db = Database::getInstance()->getConnection();

}

public static function build($type) { 
        // assumes the use of an autoloader
	   
        
        $saved=$type."Model";
           
      
        require_once ('../app/model/'.$saved. '.php');
          
        if (class_exists($saved)) {


            return new $saved();
        }
        else
        {

            throw new Exception("Invalid product type given.");
        }
    } 


public function selectAll($params)
{
       
         
        if($params['id'])
        {
          $sql = "SELECT * FROM ".$this->table_name. " where id ='".$params['id']."'";   
        }
        else
        {
         $sql = "SELECT * FROM ".$this->table_name;   
        }


         // echo $sql;
         $result = $this->db->query($sql);
         return $result;
}
public function create($params)
{

}
public function update($params)
{

       $save_count=count($this->coloms_name);
       $k=1;
      $sql = "UPDATE ".$this->table_name." SET ";
        foreach ( $this->coloms_name as $value) {
        $sql=$sql.$value."='".$params[$value] ."'";
        if($k++!=4)
        {
         $sql= $sql.", ";
        }
}

$sql=$sql." WHERE id =".$params['id'];

 
        
     $result = $this->db->query($sql);
}
public function insert($params)
{
     $sql = "INSERT INTO ".$this->table_name;

     // implode keys of $array...
     $sql .= " (`".implode("`, `", $this->coloms_name)."`)";
     $sql .= " VALUES ('".implode("', '", $params)."') ";
     $result = $this->db->query($sql);
    
}
public function delete($params)
{

             $sql_query ="DELETE FROM ".    $this->table_name." WHERE id =".$params['id'] ;
             $result = $this->db->query($sql_query);
}
}

?>
