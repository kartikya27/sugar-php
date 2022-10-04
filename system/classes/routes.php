<?php

class routes{

    public function __construct(){
       
        
    }
    public function url(){
        if(isset($_GET['url']))
        {
            print_r($_GET['url']);
        }
    }
}
?>