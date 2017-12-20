<?php
require_once('../app/controller/UserController.php');

class Controller
{
 public function __construct()
  {


  }
  public function index($params)
  {
   
  }

  public function create($params)
  {
   
  }
  public function update($params)
  {
   
  }
   public function insert($params)
  {
   
  }
  public function delete($params)
  {
   
  }
  public static function build($save) {
        // assumes the use of an autoloader
       

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
