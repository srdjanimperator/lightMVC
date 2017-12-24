<?php

class Router {
    
    function resolve($url) {
        
        $url_parts = explode('/', trim($url, '/'));

        $url_parts_num = count($url_parts);
        
        foreach(routes as $route => $route_value) {
           $parts = explode('/', trim($route, '/'));
           $parts_num = count($parts);
           
           if($parts_num == $url_parts_num)
           {
               $static = array();
               $dynamic = array();
               
               $counter = 0;
               foreach($parts as $part) {
                   if(strpos($part, ":") === 0){
                       //it's dynamic route part
                       array_push ( $dynamic, array ( "part" => trim($part, ':'),  "seq" => $counter ) );
                   } else {
                       array_push( $static, array ( "part" => $part, "seq" => $counter ) );
                   }
                   $counter++;
               }
               
               $matched = true;
               foreach($static as $s) {
                   if($s["part"] != $url_parts[$s["seq"]])
                        $matched = false;
               }
               if($matched) {
                   //form a result 
                   $result = array(
                        "controller" => $route_value["controller"],
                        "method" => $route_value["method"],
                        "args" => array()
                   );
                   //add arguments
                   foreach($dynamic as $d) {
                        $result["args"][$d["part"]] = $url_parts[$d["seq"]];
                   }
                   
                   return $result;
               }
           }
        }
       
        $result =  array (
            "controller" => "ErrorController",
            "method" => "show404page",
            "args" => array()
        );
        
        return $result;
        
    }
}

?>