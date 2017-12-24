<?php

class App {

    function run () {
        
        include root . "/config.php";
        
        // proccess user http request
        $r = new Router();
        $url = $_SERVER["REQUEST_URI"];
        
        $url_resolved = $r->resolve($url);
        
        $controller = $url_resolved["controller"];
        $method = $url_resolved["method"];
        $args = $url_resolved["args"];
        
        $c = new $controller();
        $c->$method($args);
    }
    
}

?>