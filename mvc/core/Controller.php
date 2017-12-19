<?php
require_once('../app/controller/UserController.php');

class Controller
{
 public function __construct()
  {

 	//die("controller called \n");

  }
  public function index()
  {
   
  }

 public static function build($save) {
        // assumes the use of an autoloader
       
      $type=$save."Controller";
	
	
        if (class_exists($type)) {



            return new $type($save);
        }
        else {
            throw new Exception("Invalid product type given.");
        }
    } 



}

?>
