<?php

    spl_autoload_register(function($className){
        include "classes/$className.php";
    });

    $routes  = new rout;
?>