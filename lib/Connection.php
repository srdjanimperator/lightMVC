<?php

class Connection {
    
    private $dbh;
    
    const username = "id4027338_imperator";
    const password = "a123imperatora123";
    const host = "localhost";
    const database = "id4027338_marketrs";
    
    function __construct () {
    
        try{
            $conn_str = "mysql:host=" . self::host . ";dbname=" . self::database;
            
            $this->dbh = new PDO($conn_str, self::username, self::password);
        } catch (PDOException $e) {
            throw $e;
        }

    }
    
    function dbh() {
        return $this->dbh;
    }
    
}


?>