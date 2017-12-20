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
       
        

         $sql = "SELECT * FROM ".$this->table_name;
         $result = $this->db->query($sql);
         return $result;
}
public function create($params)
{

}
public function update($params)
{
   
}
public function insert($params)
{

//     echo "fgf";
//     die();
//      $sql ="INSERT INTO ".$this->tablename." ("id,firstname,lastname, email, reg_date";


//     foreach ($this->coloms_name as $value) {
//     $sql=sql.$value",";
// }


// )
//        $sql=$sql." VALUES ('" .$params[id]."','".$params['firstname']."', '".$params['lastname']."', '".$params['email']."', '".$params['reg_date']."')";

//        echo $sql;
//         // $sql ="INSERT INTO ".$this->tablename." (id,firstname,lastname, email, reg_date)
//         // VALUES ('" .$params[id]."','".$params['firstname']."', '".$params['lastname']."', '".$params['email']."', '".$params['reg_date']."')";
        
        

        // $result = $this->db->query($sql);
}
public function delete($params)
{

}
}

?>
