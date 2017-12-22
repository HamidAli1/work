<?php
require_once('../app/controller/StudentController.php');


class Controller
{
 public function __construct()
  {


     
  }
  public function selectAll($params)
  {
   
  }

  public function create()
  {
   
  }
  public function update($params)
  {
   
  }
   public function insert()
  {
   
  }
  public function delete($params)
  {
   
  }
  public function edit($params)
  {

  }
  public static function build($save) {
        
     
        $type=$save."Controller";

        if (class_exists($type)) {

            return new $type($save);
        }
        else
         {

            throw new Exception("Invalid product type given.");
        }
  } 



}

?>
