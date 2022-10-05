<?php 

class controller{


    public function renderView($view, $data = []){
        if(file_exists("../resources/views/" .$view.".php")){
            require_once "../resources/views/$view.php";
        }else{
            echo "view file not founde";
        }
    }

    public function model($modelName){
        if(file_exists("../app/models/" .$modelName.".php")){
            require_once "../app/models/$modelName.php";
            return new $modelName;
        }else{
            echo "model file not founde";
        }
    }

}