<?php 


class Model
{

function __construct()
{


}

public static function build($type) {
        // assumes the use of an autoloader


	
	$saved=$type."Model";


        require_once '../app/model/'.$saved. '.php';

        if (class_exists($saved)) {
            return new $saved();
        }
        else {
            throw new Exception("Invalid product type given.");
        }
    } 


function index()
{

}

}

?>
