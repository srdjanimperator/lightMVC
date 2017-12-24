<?php

class Model {
    
    public $dbh;
    
    function __construct() {
        $c = new Connection();
        $this->dbh = $c->dbh();
    }
    
}

?>