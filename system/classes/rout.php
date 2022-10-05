<?php

class rout{

    public $controller = 'baseController';
    public $method = 'show';
    public $param = [];

    public function __construct(){
       $url = $this->url();
        if(!empty($url))
        {
            if(file_exists("../app/controllers/" . $url[0] .".php"))
            {
                $this->controller = $url[0];
                unset($url[0]);
            }else
            {
                echo $url[0]." Controller.php Controller not Found";
            }
        }
        // $this->controller = $this->controller."Controller";
        require_once "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        if(isset($url[1]) && !empty($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }else{
                echo $url[1]." function not Found";
            }
        }

        if(isset($url)){
            $this->param = $url; 
        }
        else{
            $this->param = [];
        }

        call_user_func_array([$this->controller,$this->method],$this->param);
    }

    public function url(){
        if(isset($_GET['url']))
        {
            $url = $_GET['url'];
            $url = rtrim($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
            // print_r($_GET['url']);
        }
    }
}
?>