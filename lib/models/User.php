<?php

class User extends Model {
    
    // HOW TO USE dbh
    /*function addUser ($user) {
        $user["password"] = sha1($user["password"]);
        $query = "INSERT INTO users (username, email, password, image, activated) VALUES";
        $query .= " ('{$user['username']}', '{$user['email']}', '{$user['password']}', '{$user['image']}', 0)";
        try{
            $pdo_stat = $this->dbh->exec($query);
            return true;
        }
        catch(PDOException $e) {
            throw ($e);
        }        
    }*/
}

?>