<?php

class HomeController extends BaseController {
    
    function showHomePage ($args) {
        $this->view("home", null);
    }
    
}

?>