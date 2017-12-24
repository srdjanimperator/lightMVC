<?php

class BaseController {
    
    function view ($view_name, $data) {
        
        if($data) extract($data);
        
        include root . "/views/" . $view_name . ".php";
    }
    
    function clearInput($str) {
        return htmlspecialchars(trim($str));   
    }

}

?>