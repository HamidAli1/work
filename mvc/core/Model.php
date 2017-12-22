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
       
        $saved=$type."Model";
        require_once ('../app/model/'.$saved. '.php');
      
        if (class_exists($saved)) 
        {
            
          return new $saved();
        }
        else
        {

            throw new Exception("Invalid product type given.");
        }
    } 


public function selectAll($par)
{
       
           
        if(array_filter($par))
        { 

             $m=key($par);
             $n=$par[$m];          
             $sql = "SELECT * FROM ".$this->table_name. " where ".$m." ='".$n."'"; 
        }
        else
        {
             $sql = "SELECT * FROM ".$this->table_name;   
        }  

         
         $result = $this->db->query($sql);
         return $result;
}
public function update($params)
{


     $m=key($params);                           
     $uid=$params[$m];
     unset($params[$m]);
     if (!array_filter($params)) 
     {
            echo "All the fields cannot be Empty";
       
     }
     else
     {

        $save_count=count($this->coloms_name);
        $k=1;
        $sql = "UPDATE ".$this->table_name." SET ";
        foreach ( $this->coloms_name as $value) 
        {
            $sql=$sql.$value."='".$params[$value] ."'";
             if($k++!= $save_count)
             {
                $sql= $sql.", ";
             }
                
        }
        $sql=$sql." WHERE ".$m."=".$uid;
        $result = $this->db->query($sql);
     }

}
public function insert($params)
{
   
      
        if (!array_filter($params))
        {
             echo "All the fields cannot be Empty";
        }
        else
        {
              $sql = "INSERT INTO ".$this->table_name;
              $sql .= " (`".implode("`, `", $this->coloms_name)."`)";
              $sql .= " VALUES ('".implode("', '", $params)."') ";
              $result = $this->db->query($sql);
        }     
    
}
public function delete($par)
{
             $m=key($par);
             $n=$par[$m];
             $sql_query ="DELETE FROM ".    $this->table_name." WHERE ".$m." =".$n;
             $result = $this->db->query($sql_query);

}
}

?>
